# Free Deployment Guide for Render

This guide explains step-by-step how to deploy your **FabricFlow** Laravel application on **Render.com** for **FREE** using Docker.

---

## 🚀 Prerequisites

1. A **GitHub** account.
2. A free account on **[Render.com](https://render.com/)**.

---

## 📌 Step 1: Push Code to GitHub

Make sure all changes in this project are committed and pushed to your GitHub repository:

```bash
git add .
git commit -m "Optimize project files & add Docker support for Render"
git push origin main
```

---

## 📌 Step 2: Deploy on Render

### Option A: Using Render Blueprint (Recommended - 1 Click)

1. Log in to [Render Dashboard](https://dashboard.render.com/).
2. Click **New +** at the top right and select **Blueprint**.
3. Connect your GitHub repository (`digital-heroes-fabricflow` or your repository name).
4. Render will auto-detect the `render.yaml` file.
5. Click **Apply**.
6. Render will automatically build the Docker image and deploy your website for free!

---

### Option B: Manual Web Service Setup

1. Log in to [Render Dashboard](https://dashboard.render.com/).
2. Click **New +** -> **Web Service**.
3. Select **Build and deploy from a Git repository** and pick your repository.
4. Fill in the following details:
   - **Name**: `fabricflow-website`
   - **Language / Environment**: `Docker`
   - **Branch**: `main`
   - **Region**: Choose closest to your audience (e.g. Oregon, Frankfurt, Singapore)
   - **Instance Type**: **Free** ($0/month)
5. Expand **Advanced / Environment Variables** and add the following:
   - `APP_ENV` = `production`
   - `APP_DEBUG` = `false`
   - `DB_CONNECTION` = `sqlite`
   - `LOG_CHANNEL` = `stderr`
6. Click **Create Web Service**.

---

## ⚡ Performance Optimizations Included

- **OPcache Enabled**: Fast PHP bytecode execution with low memory consumption tailored for Render's 512MB RAM limit.
- **Vite Production Bundling**: Minified CSS and JavaScript assets.
- **Nginx Gzip & Static Caching**: Optimized static asset caching for fast page loading.
- **Auto Dynamic Port Handling**: Container automatically adapts to Render's dynamic `$PORT`.
- **Automatic Caching & Migrations**: Config, routes, and views are pre-cached automatically during container startup.

---

## 🌐 Custom Domain Setup (Optional)

In Render Dashboard -> your Web Service -> **Settings** -> **Custom Domains**, you can add your custom domain for free with automated SSL certificates!
