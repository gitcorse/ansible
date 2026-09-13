#Ansible

## 1 ) runing ansible command by command.

```bash
ansible all -i hosts.ini -m ping
```

```bash
 all ---> Select All Hosts In Hosts.ini File
 -i  ---> Invontory File
 -m  ---> Ansible Module
```
## 2 ) runing command by useing root previlge.
###     [1] to run ```bash sudo apt update``` in manged node.

```bash
ansible all -i hosts.ini -m apt -a cache_update=true --become --ask-become-pass
```

###     [2] to install new package.

```bash
ansible all -i hosts.ini -m apt -a name=nmap --become --ask-become-pass
```
```sh
-m                ---> module name
-a                ---> moudule arge
--become          ---> run this command as root
--ask-become-pass ---> ask for root password
```