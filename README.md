<div align="center">

# stone-trading-platform
### Enterprise Stone Trading Platform

A modular platform for **stone catalog management, product specification modeling, and multilingual business workflows**,  
built with **Laravel 12**, **Filament**, and a scalable architecture.

[![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![Filament](https://img.shields.io/badge/Filament-3.x-FACC15?style=for-the-badge&logoColor=black)](https://filamentphp.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![Status](https://img.shields.io/badge/Status-Portfolio%20Project-111827?style=for-the-badge)](#)
[![Maintained By](https://img.shields.io/badge/Maintained%20By-NziCode-0F172A?style=for-the-badge)](https://github.com/NziCode)

<br>

> A scalable system for managing stone products, technical specifications, and multilingual catalogs.

</div>

---

## ✨ Overview

**stone-trading-platform** is a modular backend system designed for the **stone trading and catalog management industry**.

The platform focuses on:
- Structured stone product catalogs
- Single-item product listings (Unique Blocks/Slabs)
- Technical stone specifications
- Multilingual content management
- Admin-driven workflows
- Scalable architecture for future commerce features

Unlike traditional e-commerce systems, this platform models **unique items**, where each product represents a **specific block or slab**, not a quantity-based inventory item.

---

## 🎯 Project Goals

The project aims to provide a flexible foundation for digital stone catalogs and administrative workflows.

### Main Objectives:
- **Structured Product Management:** Handling complex stone data with precision.
- **Flexible Attribute Modeling:** Dynamic specifications for different stone types.
- **Multilingual Publishing:** Seamlessly managing content across multiple locales.
- **Scalable Architecture:** Built on Laravel 12 for long-term maintainability.

---

## 🛡️ Usage Notice

> This repository is published primarily for **development and portfolio demonstration**.
> Unauthorized redistribution or commercial use of this project without permission is not allowed.

---

## 🏗️ Platform Highlights

### Unique Item Modeling
Designed for managing individual stone items with structured metadata:
- Category & Type
- Finish & Grade
- Precise Dimensions (Length, Width, Height)
- Weight & Origin
- Current Status (Available / Sold)

### Multilingual Content System
Full support for international markets:
- Translatable model fields (Name, Description, Location)
- RTL compatibility (Persian/Arabic support)
- Scalable language configuration

### Enterprise Admin Features
- **Role-Based Access Control (RBAC):** Granular permissions for staff and admins.
- **Activity Logging:** Comprehensive audit trails for every change in the system.
- **Media Management:** High-quality image handling for stone slabs and blocks.

---

## 🚀 Core Business Modules

### 1) Product Information Management (PIM)
A structured system for stone listings including categories, slugs, and multilingual technical descriptions.

### 2) Dynamic Attribute Engine
A flexible system for defining product specifications (e.g., Color, Density, Water Absorption) without altering the database schema.

### 3) Single-Item Inventory Logic
Logic tailored for high-value unique items where each SKU represents exactly one physical item.

### 4) CMS & Content Layer (Planned)
Future capabilities for managing pages, banners, and marketing content across the platform.

---

## 🧱 Domain Model Architecture

Core entities implemented in the system:
- `Category`
- `Product` (Single-item focus)
- `ProductAttribute` (Dynamic Specs)
- `ProductAttributeOption`
- `ProductAttributeValue`

### Translation-ready fields
The following fields utilize JSON-based translations via `spatie/laravel-translatable`:
- `name`
- `description`
- `location`
- `value` (for attributes)

---

## 🧰 Technology Stack

| Layer | Technology |
|------|------------|
| **Backend Framework** | Laravel 12 |
| **Admin Panel** | Filament 3.x |
| **Language** | PHP 8.2+ |
| **Security/RBAC** | Filament Shield + Spatie Permission |
| **Media Handling** | Spatie Media Library |
| **Translations** | Spatie Laravel Translatable |
| **Audit Trail** | Spatie Activitylog |
| **Database** | MySQL / MariaDB |

---

## 🗺️ Roadmap

### Phase I — Foundation & Infrastructure (Completed)
- [x] Laravel 12 & Filament Setup
- [x] RBAC & Permission Structure
- [x] Translation & Media Integration
- [x] Activity Logging

### Phase II — Core Domain Modeling (In Progress)
- [x] Categories & Product Schema
- [x] Dynamic Attribute Engine
- [ ] Filament Admin Resources
- [ ] Automated Slug Generation

### Phase III — Advanced Catalog
- [ ] Multi-criteria Filtering
- [ ] High-Res Gallery Management
- [ ] Technical PDF Data Sheets

### Phase IV — Commerce & CMS
- [ ] Inquiry Management
- [ ] Content Pages & Navigation
- [ ] Frontend API Integration

---

## ✍️ Author

Developed and maintained by **NziCode**.

---

## 🔒 License

Proprietary — All rights reserved.
