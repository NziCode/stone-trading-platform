<div align="center">

# 🪨 En‑TradingGroup
### Enterprise Stone Trading Platform

A premium, private enterprise platform for **stone sales, catalog management, and multilingual business operations**  
built with **Laravel 12**, **Filament**, and a clean modular architecture.

[![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![Filament](https://img.shields.io/badge/Filament-3.x-FACC15?style=for-the-badge&logoColor=black)](https://filamentphp.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![Status](https://img.shields.io/badge/Status-Portfolio%20Showcase-111827?style=for-the-badge)](#)
[![Maintained By](https://img.shields.io/badge/Maintained%20By-NziCode-0F172A?style=for-the-badge)](https://github.com/NziCode)

<br>

> **Built for precision, scalability, and premium stone commerce operations**  
> with multilingual content, structured product modeling, and enterprise admin workflows.

</div>

---

## ✨ Overview

**En‑TradingGroup** is a specialized enterprise solution designed for the **global stone trading industry**. This repository serves as a professional portfolio showcase of high-end Laravel engineering.

This platform focuses on:
- **Stone Catalog Management:** Handling complex stone types and finishes.
- **Single-Item Inventory:** Each product is a unique, one-of-a-kind stone piece.
- **Dynamic Specifications:** Technical stone attributes (Grade, Origin, Dimensions).
- **Multilingual Excellence:** Full RTL and bilingual support for international trade.

---

## 🛡️ Intellectual Property & Usage

> ### Proprietary Notice
> This project and its architectural design are the intellectual property of **NziCode**.
> - ✅ **Permitted:** Code review, architectural evaluation, and learning.
> - ❌ **Prohibited:** Commercial redistribution, resale, or unauthorized deployment.
>
> **License:** Proprietary - All rights reserved.

---

## 🏛️ Architecture & Engineering Standards

This project follows modern **Enterprise Laravel** standards:
- **SOLID Principles:** Ensuring maintainability and decoupled logic.
- **Dynamic Attribute Engine:** A flexible EAV-inspired system to handle stone properties without schema migrations.
- **Translation-First Design:** Using JSON-based translatable fields for seamless multilingual scaling.
- **RBAC Security:** Granular permission management via Filament Shield.
- **Audit Trails:** Full activity logging for every administrative action.

---

## 🧱 Core Domain Model

The system is built around a robust data structure tailored for the stone industry:

- **Categories:** Nested structure for stone types (e.g., Marble, Granite, Travertine).
- **Products:** Represents unique stone blocks or slabs.
- **Dynamic Attributes:** Customizable specs like "Quarry Location", "Compression Strength", or "Finish Type".
- **Media System:** High-resolution gallery management for premium product presentation.

---

## 🧰 Technology Stack

| Layer | Technology |
|------|------------|
| **Core Framework** | Laravel 12.x (Latest) |
| **Admin Panel** | Filament v3 (TALL Stack) |
| **Language** | PHP 8.2+ |
| **Security** | Filament Shield (Spatie Permission) |
| **Media** | Spatie Media Library |
| **Logs** | Spatie Activitylog |
| **Internationalization** | Spatie Laravel Translatable (JSON) |
| **Database** | MySQL / MariaDB |

---

## 🗺️ Development Roadmap

### 🟢 Phase I — Foundation (Complete)
- [x] Core Framework & Environment setup.
- [x] Administrative RBAC (Shield) implementation.
- [x] Media & Activity Log infrastructure.
- [x] Translation engine integration.

### 🟡 Phase II — Core Domain (In Progress)
- [x] Database Schema for Categories & Products.
- [x] Dynamic Attribute & Option models.
- [ ] Filament Resource development for Catalog.
- [ ] Advanced multilingual SEO & Slug management.

### ⚪ Phase III — Catalog & UX
- [ ] Dynamic filtering system for stone specs.
- [ ] Product media gallery workflows.
- [ ] Detailed technical specification sheets.

### ⚪ Phase IV — Commerce & CRM
- [ ] Inquiry & Lead management system.
- [ ] Order workflow for unique items.
- [ ] Customer interaction history.

---

## ✍️ Branding & Signature

**Designed and Engineered by [NziCode](https://github.com/NziCode)**

> *Precision-built software for the modern stone industry.*

---

## 🔒 Security & Privacy
To maintain security and client privacy:
- All sensitive credentials and API keys are managed via `.env` (excluded from Git).
- No real-world client data or proprietary media is included in this public repository.
- Use `composer install` and `php artisan migrate` for local environment setup.
