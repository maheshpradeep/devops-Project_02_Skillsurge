# SkillSurge – DevOps Learning Project on AWS ☁️⚙️

This repository documents the **DevOps workflow** I followed to deploy a containerized PHP-based freelance web app (SkillSurge) on **AWS EC2** using **Docker, nginx, and manual deployment steps**.

My focus was not just on building the app, but learning the **end-to-end DevOps process** from local Docker setup to cloud deployment and reverse proxy integration.

---

## 📌 Project Goal

✅ Build a real-world PHP + MySQL app  
✅ Learn how to containerize it using Docker  
✅ Deploy it on a live AWS EC2 server  
✅ Implement a reverse proxy using nginx  

---

## 🚀 Project Summary

| **Category**   | **Description** |
|----------------|-----------------|
| App            | PHP-based freelance platform |
| Host           | AWS EC2 (Ubuntu) |
| Containers     | PHP-Apache, MySQL, phpMyAdmin |
| Deployment     | Manual (via SSH) |
| Reverse Proxy  | nginx (outside Docker) |
| Orchestration  | docker-compose |
---

## 📚 Phase-by-Phase DevOps Journey

### ✅ Phase 1 – Local Development (Docker Compose)
- Dockerized the frontend/backend (`Dockerfile`)
- Added MySQL and phpMyAdmin as services
- Used `docker-compose.yml` to orchestrate
- Successfully tested app on `localhost:9091`

### ✅ Phase 2 – Cloud Hosting on AWS EC2
- Created a new Ubuntu EC2 instance
- Installed Docker and Docker Compose
- Cloned project repo via GitHub
- Ran the app using `docker-compose up -d`
- Verified app worked via EC2 IP and custom port

### ✅ Phase 3 – nginx Reverse Proxy Setup
- Installed nginx on EC2 (outside Docker)
- Configured nginx to proxy requests from `http://<EC2-IP>` to internal PHP container
- Hid internal ports from external users
- Disabled direct access to container ports (e.g., `:9091`)
- nginx now serves the app cleanly on port 80

---

## 📁 Repository Files

| File / Folder          | Purpose |
|------------------------|---------|
| `docker-compose.yml`   | Defines and runs PHP, MySQL services |
| `nginx-config.txt`     | Contains the exact nginx reverse proxy config used on EC2 |
| `Dockerfile`           | Custom PHP container build file |
| `index.php`, `assets/` | Web app frontend/backend |

---

## 📌 DevOps Tools and Skills Practiced

- **Docker** – containerize PHP and MySQL services
- **Docker Compose** – service orchestration
- **AWS EC2** – provision and host Ubuntu instance
- **nginx** – reverse proxy setup and port management
- **Git & GitHub** – version control and repo management
- **SSH / SCP** – remote server access and file transfers

---

## 🔒 Security Considerations

- Ports exposed only as needed (`80` public, internal ports private)
- nginx used to protect internal container structure
- `.pem` key authentication for EC2
- Database credentials managed via `docker-compose` env vars

---

## 🔜 Coming Next – Phase 4+

| Task | Description |
|------|-------------|
| 🛠️ CI/CD Pipeline | Automate deployments via GitHub Actions |
| 📦 AWS ECR        | Store Docker images in AWS ECR |
| 🤖 Ansible        | Automate EC2 provisioning and nginx config |
| 🗂️ Secrets Mgmt   | Use `.env` + GitHub Secrets securely |

---

## 🌐 Live URL (if applicable)

`http://51.21.221.29/` 

---

