# 🏗️ En-TradingGroup - Enterprise Stone Trading System

A professional, scalable, and multilingual stone trading platform built with **Laravel 12**.  
This project is designed as a modular enterprise solution for managing stone products, inventory, sales operations, content management, and administrative workflows.

> This repository currently represents the **core backend/admin infrastructure** of the platform and is being developed incrementally with clean architecture and long-term scalability in mind.

[![Laravel Version](https://img.shields.io/badge/Laravel-12.x-red.svg)](https://laravel.com)
[![PHP Version](https://img.shields.io/badge/PHP-8.2%2B-blue.svg)](https://www.php.net)
[![Filament Version](https://img.shields.io/badge/Filament-3.x-orange.svg)](https://filamentphp.com)

---

## 📌 Project Overview

**En-TradingGroup** is an enterprise-grade system intended for the stone and building materials industry.  
It is being developed to support both **administrative operations** and **future e-commerce capabilities**, including:

- dynamic stone/product management
- category and specification management
- inventory tracking
- role-based administration
- content and page management
- multilingual content handling
- online order and payment workflow
- SMS notification integration
- maintainable and extensible backend architecture

The main goal of this project is to provide a **robust, modular, and production-ready foundation** for a modern stone trading business.

---

## 🛡️ Intellectual Property Notice

**Proprietary Software:**  
The source code, business logic, and assets within this repository are the intellectual property of **NziCode**.  
Unauthorized copying, modification, redistribution, or commercial use of this software is strictly prohibited without explicit written permission.

This repository is intended for **development, evaluation, and portfolio/review purposes** only.

---

## 🧱 Current Development Status

At the current stage, the project foundation and core admin infrastructure have been initialized.

### ✅ Implemented / Installed
- Laravel 12 project base
- Filament admin panel
- Filament Shield integration
- Role & permission foundation
- Media management infrastructure
- Activity logging infrastructure
- Initial admin-related setup and package integration

### 🚧 Planned Modules
- Product / stone management
- Category hierarchy
- Dynamic attributes and specifications
- Inventory and stock tracking
- Orders and order items
- Payment integration
- CMS pages, menus, banners, and settings
- Multilingual content architecture
- SMS notification services
- SEO-ready content structure

---

## 🛠️ Technology Stack

- **Framework:** Laravel 12
- **Language:** PHP 8.2+
- **Admin Panel:** Filament 3
- **Authorization:** Filament Shield + Spatie Permission
- **Media Handling:** Spatie Media Library
- **Activity Tracking:** Spatie Activitylog
- **Frontend Build Tools:** Vite / NPM
- **Database:** MySQL / MariaDB
- **Architecture Goal:** Modular, service-oriented, maintainable codebase

---

## 📦 Installedحتماً. در ادامه یک نسخه **توسعه‌یافته، حرفه‌ای و قابل استفاده برای GitHub** از README فعلی‌ات می‌دهم که هم حالت **Portfolio/Showcase** را حفظ کند، هم وضعیت واقعی پروژه (Laravel 12 + Filament + Shield + Media Library + Activity Log) را دقیق و استاندارد توضیح دهد، و هم **Roadmap ماژول‌های فروش سنگ** را شفاف کند.

می‌توانی همین را جایگزین `README.md` کنی:
```md
# 🏗️ En-TradingGroup — Enterprise Stone Trading System (Laravel 12)

A professional, private-enterprise platform designed for **global stone & building materials trade**.
This repository is primarily a **portfolio showcase** demonstrating clean architecture, modular design, and enterprise-grade implementation using **Laravel 12** and **Filament**.

[![Laravel Version](https://img.shields.io/badge/Laravel-12.x-red.svg)](https://laravel.com)
[![Filament Version](https://img.shields.io/badge/Filament-3.x-yellow.svg)](https://filamentphp.com)

---

## 💼 Project Overview

En-TradingGroup is an industrial solution for:

- Managing **large-scale stone inventories**
- Handling **dynamic stone specifications** (finish, grade, quarry, thickness, dimensions, etc.)
- Processing **orders, payments, logistics**
- Providing a **CMS** for pages, menus, banners, and branding
- Supporting **multi-language** (Persian/English, RTL-ready)

The goal is a **scalable**, **extensible**, and **standard** codebase with a strong foundation for future growth.

---

## 🛡️ Intellectual Property Notice

**Proprietary Software:**  
The source code and assets within this repository are the intellectual property of **NziCode**.  
Unauthorized copying, modification, or distribution is strictly prohibited.  
This repository is for **viewing/reviewing purposes only**.

---

## ✅ Current Status (What’s Implemented)

### Admin & Infrastructure
- ✅ Laravel 12 project initialized
- ✅ **Filament Admin Panel** integrated
- ✅ **Roles & Permissions** using:
  - `bezhansalleh/filament-shield`
  - `spatie/laravel-permission`
- ✅ **Media Management** using `spatie/laravel-medialibrary`
- ✅ **Activity Logging** using `spatie/laravel-activitylog`

> At this stage, the project is ready to start implementing the **core commerce modules** (Categories, Products/Stones, Attributes, Inventory, Orders, Payments, CMS).

---

## 🧩 Core Modules (Planned / Roadmap)

### 🪨 Stone Catalog & PIM (Product Information Management)
- Categories (multi-level)
- Products / Stones
- Product galleries & documents (certificates, datasheets)
- SEO fields (slug/meta)
- Feature flags (featured, new, etc.)

### 🧬 Dynamic Attributes Engine (Industry Specs)
A flexible attribute system to support:
- Quarry
- Finish
- Grade
- Thickness
- Dimensions
- Color/Pattern
- Packaging & Pallet details

Suggested tables:
- `attributes`
- `attribute_values`
- `product_attribute_values`

### 📦 Inventory Engine
- Stock management by **unit** and/or **m²**
- Low-stock thresholds & alerts
- Warehouse/location readiness (future)

### 🛒 Orders & Checkout
- Cart & cart items
- Order lifecycle (pending/paid/packing/shipped/delivered/cancelled)
- Invoices & order notes
- Admin order management via Filament

### 💳 Payments
- Gateway abstraction (driver-based)
- Callback/verify
- Transaction logging and idempotency (prevent duplicates)

### 📩 SMS Notifications (Kavenegar)
- Order confirmation / status updates
- OTP/verification (optional future)
- Queue-based sending (jobs)

### 📰 CMS & Content Management
- Pages (dynamic, multilingual)
- Menus
- Banners / sliders
- Site settings (general, SEO, contact)

### 🌍 Multilingual + RTL
- Persian / English
- RTL-ready UI
- Translation strategy (models + UI strings)

---

## 🛠️ Tech Stack

- **Backend:** Laravel 12
- **Admin Panel:** Filament (v3)
- **Authorization:** Filament Shield + Spatie Permission
- **Media:** Spatie Media Library
- **Audit Trail:** Spatie Activitylog
- **Database:** MySQL / MariaDB (recommended)

---

## 📦 Installed Packages (Key)

- `filament/filament`
- `bezhansalleh/filament-shield`
- `spatie/laravel-permission`
- `spatie/laravel-medialibrary`
- `spatie/laravel-activitylog`

---

## ⚙️ Local Development Setup

### 1) Clone
```bash
git clone <REPOSITORY_URL>
cd <PROJECT_FOLDER>
