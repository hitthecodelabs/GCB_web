# SSH access to *.org - Namecheap & cPanel (Windows + PowerShell)

This guide shows how to log in to your cPanel server via **SSH using PowerShell** on Windows, using your private key file `*.pem`. It includes safe permissions, first‑connection prompts, optional key caching, and `scp` examples.

> **Server details (as used here)**
>
> - **User**
> - **Host / IP**
> - **SSH Port**
> - **Key file**
> - **Known ED25519 fingerprint (example shown by your server):**  
>   `SHA256:9u29S/0N...`


---

## 0) Prerequisites

- Windows 10/11 with **OpenSSH** client (included by default).
- Your private key downloaded from cPanel: `*.pem`.
  Place it in: `C:\Users\<YOU>\.ssh\`


## 1) Open PowerShell and set handy variables

```powershell
# Open PowerShell as your normal user and run:
$KEY  = "$env:USERPROFILE\.ssh\*.pem"
$USER = "..."
$HOST = "..."
$PORT = 12345
```

> If you will use the newer key:  
> ` $KEY = "$env:USERPROFILE\.ssh\*.pem"`


## 2) Fix Windows permissions (avoid *UNPROTECTED PRIVATE KEY FILE*)

```powershell
icacls $KEY /inheritance:r
icacls $KEY /grant:r "$($env:USERNAME):(R)"
icacls $KEY      # (optional) confirm it shows only SYSTEM/Administrators/You
```


## 3) First connection

```powershell
ssh -i $KEY -p $PORT $USER@$HOST
```

- The first time you’ll see the **host authenticity** prompt; type `yes` to add it to `~\.ssh\known_hosts`.
- If your key has a **passphrase**, PowerShell will ask:
  ```
  Enter passphrase for key 'C:\Users\<YOU>\.ssh\*.pem':
  ```
  Enter it and you should land on the remote shell (`[user@server ~]$`).


## 4) Optional: cache your key passphrase with `ssh-agent`

```powershell
Get-Service ssh-agent | Set-Service -StartupType Automatic
Start-Service ssh-agent
ssh-add $KEY           # you'll be prompted once for the passphrase
# From now on, plain:
ssh -p $PORT $USER@$HOST
```


## 5) Upload/Download files with `scp`

**Upload** a local file to your home directory on the server:
```powershell
scp -P $PORT -i $KEY "C:\path\to\local\file.zip" "$USER@$HOST:~/"
```

**Download** a remote file to your local Downloads folder:
```powershell
scp -P $PORT -i $KEY "$USER@$HOST:~/backup.tar.gz" "$env:USERPROFILE\Downloads\"
```

**Upload** a folder recursively (example: publish web assets):
```powershell
scp -r -P $PORT -i $KEY "C:\path\to\site\assets" "$USER@$HOST:~/public_html/assets/"
```


## 6) (Nice to have) Create a short alias in `.ssh\config`

Create (or edit) `C:\Users\<YOU>\.ssh\config` and add:

```
Host gcb
    HostName 12.34.456.78
    Port 12344
    User user
    IdentityFile ~/.ssh/*.pem
    IdentitiesOnly yes
```

Then connect with just:
```powershell
ssh gcb
```

> If you prefer the new key, change `IdentityFile` to `~/.ssh/*.pem`


## 7) Troubleshooting

- **`UNPROTECTED PRIVATE KEY FILE`**  
  Re-run the `icacls` commands in step 2.

- **`Permission denied (publickey)`**  
  - Wrong key path? Check `$KEY` and that the file exists.
  - The server may be using the *other* key (try with `*.pem`).
  - Ensure you’re using the correct user (`user`) and port (`12345`).

- **Stuck at passphrase / forgot it**  
  The key’s passphrase is set when you generated the key in cPanel. If forgotten, generate a new key pair in cPanel and re-download the private key.

- **Server did not present expected fingerprint**  
  The prompt should show an ED25519 fingerprint like:  
  `SHA256:9u29S/0NOK8AJw8qP...`  
  If it’s different, confirm with your hosting before accepting.

- **Timeout / No route**  
  Verify that the port `12345` is open from your network and that the host/IP is reachable. Try:  
  `Test-NetConnection -ComputerName $HOST -Port $PORT`


## 8) Quick checklist

- [ ] Key file is in `C:\Users\<YOU>\.ssh\` and named correctly
- [ ] Permissions set (`icacls`)
- [ ] Using username **user**
- [ ] Using port **12345**
- [ ] Accepted host key on first connect
- [ ] Entered passphrase (if your key is protected)

---

**That’s it!** You can now log in with one command:

```powershell
ssh -i $KEY -p $PORT $USER@$HOST
```

Or, after configuring `~\.ssh\config`:

```powershell
ssh gcb
```
