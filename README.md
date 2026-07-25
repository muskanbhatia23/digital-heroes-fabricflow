# FabricFlow — Wholesale Clothing Management Software

<p align="center">
  <strong>Smarter Inventory, Order Management & B2B Solutions for Wholesale Clothing Businesses</strong>
</p>

---

## 📌 Overview

**FabricFlow** is a modern, high-performance web application designed specifically for wholesale clothing manufacturers, distributors, and bulk retailers. It provides an intuitive platform to streamline inventory tracking, manage bulk orders, coordinate warehouse operations, automate invoicing, and build stronger B2B buyer relationships.

---

## ✨ Key Features

### 📦 Wholesale Operations
- **Real-Time Inventory Management**: Live stock tracking, low-stock alerts, and bulk product management.
- **Bulk Order Processing**: End-to-end workflow management from order placement to shipping.
- **Warehouse Operations**: Zone & bin location mapping with multi-warehouse support.
- **B2B Customer CRM**: Comprehensive buyer profiles, purchase history, and credit limit tracking.
- **Invoicing & Billing**: GST-compliant invoice generation, payment tracking, and automated reminders.
- **Analytics & Reporting**: Interactive sales dashboards, revenue forecasting, and trend analysis.

### 🎨 Frontend & User Experience
- **Modern Responsive Design**: Built with Bootstrap 5 and custom glassmorphism styling.
- **Dynamic Pricing Calculator**: Monthly/Yearly subscription toggle with interactive INR (₹) / USD ($) currency switcher.
- **Image Lightbox**: High-resolution image preview modal for service showcases.
- **Smooth Animations**: Scroll-triggered animations powered by AOS (Animate On Scroll).
- **SEO & Performance Optimized**: Clean Blade component structure with Vite asset compilation.

---

## 🛠️ Technology Stack

| Layer | Technology |
| :--- | :--- |
| **Framework** | [Laravel 12](https://laravel.com/) (PHP 8.2+) |
| **Frontend UI** | [Bootstrap 5](https://getbootstrap.com/), Vanilla CSS, Blade Components |
| **Build Tool** | [Vite 7](https://vitejs.dev/) |
| **Icons & Media** | [Bootstrap Icons](https://icons.getbootstrap.com/), AOS Animations |
| **Server Requirement** | XAMPP / Apache / Nginx |

---

## 📁 Project Architecture

```
fabricFlow/
├── app/
│   └── Http/                  # Controllers & Application Middleware
├── config/                     # Application Configurations
├── public/                     # Compiled Assets, Fonts, Images, Videos
│   ├── fonts/                  # Custom Typography (Bellaboo)
│   ├── images/                 # Brand Logos, Services, Testimonials
│   └── videos/                 # Product FAQ Media
├── resources/
│   ├── css/                    # Modular Stylesheets (app.css, pricing.css, product.css, contact.css)
│   ├── js/                     # Application Scripts (app.js, pricing.js, product.js, contact.js)
│   └── views/                  # Blade Templates
│       ├── components/         # Reusable Components (navbar, footer, hero, brands, why-us, etc.)
│       ├── layouts/            # Master Layout (app.blade.php)
│       └── pages/              # Main Views (home, product, pricing, contact)
├── routes/
│   └── web.php                 # Web Application Routes
├── vite.config.js              # Vite Build Pipeline Configuration
├── package.json                # Frontend Dependencies & Scripts
└── composer.json               # Backend Dependencies
```

---

## 🚀 Getting Started

Follow these steps to set up and run FabricFlow locally on your machine:

### Prerequisites

Make sure you have the following installed:
- **PHP** `>= 8.2`
- **Composer** `>= 2.0`
- **Node.js** `>= 18.0` & **npm**
- **XAMPP** or local PHP development environment

### 1. Clone the Repository

```bash
git clone https://github.com/your-repo/fabricFlow.git
cd fabricFlow
```

### 2. Install Dependencies

Install PHP dependencies using Composer:
```bash
composer install
```

Install JavaScript dependencies using npm:
```bash
npm install
```

### 3. Environment Configuration

Copy the example environment file and generate the application key:
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Build Frontend Assets

For development with hot reloading:
```bash
npm run dev
```

For production asset compilation:
```bash
npm run build
```

### 5. Launch Local Development Server

Run the Laravel development server:
```bash
php artisan serve
```

Access the application in your browser at `http://127.0.0.1:8000` or through your XAMPP local path `http://localhost/fabricFlow/public`.

---

## 🗺️ Application Routes

| Method | URI | Name | Description |
| :--- | :--- | :--- | :--- |
| `GET` | `/` | `home` | Landing page featuring hero, brand partners, features, testimonials |
| `GET` | `/product` | `product` | Showcase of core solutions, modules, and interactive image lightbox |
| `GET` | `/pricing` | `pricing` | Interactive pricing plans, monthly/yearly toggle, currency selector & FAQ |
| `GET` | `/contact` | `contact` | Inquiry form, company contact details, working hours & embedded map |

---

## 📝 License & Credits

- **Built for**: Digital Heroes Training Task
- **Framework**: [Laravel Framework](https://laravel.com/)
