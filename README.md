# MerryMeal - Food Donation & Volunteering Platform

A community-driven web application connecting food donors with those in need and coordinating volunteer efforts.

**Project Completion:** September 2022  
**Team:** 5-member group project

---

## 📋 Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Technology Stack](#technology-stack)
- [Project Structure](#project-structure)
- [Installation](#installation)
- [Usage](#usage)
- [User Roles](#user-roles)
- [Configuration](#configuration)
- [Contributors](#contributors)
- [Security](#security)
- [License](#license)

---

## 🎯 Overview

MerryMeal is a web-based platform designed to address food waste and hunger through community collaboration. The platform facilitates:

- **Donors** can contribute food items and track their donations
- **Members** can request food assistance
- **Volunteers** can help distribute food and support operations
- **Caregivers** can manage assistance for vulnerable groups
- **Partners** (organizations/businesses) can collaborate on initiatives
- **Riders** can deliver donations to distribution points
- **Admins** can oversee platform operations and manage users

The platform promotes sustainability, community engagement, and social responsibility.

---

## ✨ Features

### Core Functionality

- ✅ User authentication and registration for multiple user types
- ✅ Food donation tracking and management
- ✅ Volunteer recruitment and scheduling
- ✅ Donation progress monitoring with visual progress bars
- ✅ User profiles and dashboard systems
- ✅ Contact and support channels
- ✅ FAQ section with expandable accordion interface
- ✅ Partner management system
- ✅ Admin dashboard for user and order management

### Technical Features

- ✅ Responsive web design for mobile and desktop
- ✅ Form validation (jQuery Validate)
- ✅ Accessible UI with ARIA labels and semantic HTML
- ✅ Smooth animations and transitions
- ✅ Social media integration (Facebook, Twitter, LinkedIn, Instagram, Pinterest)
- ✅ Dynamic menu system with food showcase
- ✅ Multi-step registration process

---

## 🛠 Technology Stack

### Frontend

- **HTML5** - Semantic markup
- **CSS3** - Responsive styling with flexbox and animations
- **JavaScript (jQuery 3.5.1)** - Client-side interactivity
- **Font Awesome 6.4.0** - Icon library via CDN

### Backend

- **PHP 5+** - Server-side logic
- **MySQL** - Database management
- **Apache** - Web server (via XAMPP)

### Development & Deployment

- **XAMPP** - Local development environment
- **Git** - Version control
- **GitHub** - Repository hosting

---

## 📁 Project Structure

```
MerryMeal/
├── index.html                 # Homepage with banner and menu showcase
├── Donor.html                # Donation page with progress tracking
├── food.html                 # Food safety information
├── volunteer.html            # Volunteer recruitment page
├── volunteer2.html           # Volunteer profile/dashboard
├── contact/
│   └── ContactUsPage.html    # Contact form and support
├── css/
│   └── style.css            # Main stylesheet (900+ lines)
├── js/
│   └── script.js            # Client-side functionality
├── assets/
│   ├── images/              # Images and media files
│   └── jquery/              # jQuery library
├── login/                   # User authentication system
│   ├── admin/               # Admin login and dashboard
│   │   └── Admin_Dashboard/
│   │       ├── index.php
│   │       ├── members-list.php
│   │       ├── donors-list.php
│   │       ├── volunteers-list.php
│   │       ├── riders-list.php
│   │       ├── partners-list.php
│   │       ├── caregivers-list.php
│   │       ├── orders-list.php
│   │       ├── add_*.php    # Add user scripts
│   │       ├── edit_*.php   # Edit user scripts
│   │       └── delete_*.php # Delete user scripts
│   ├── member/              # Member login and registration
│   ├── donor/               # Donor login and registration
│   ├── volunteer/           # Volunteer login and registration
│   ├── caregiver/          # Caregiver login and registration
│   ├── partner/            # Partner login and registration
│   └── rider/              # Rider login and registration
├── .gitignore              # Git exclusion file
├── config.example.php      # Configuration template
├── GIT_GUIDELINES.md       # Git security guidelines
└── README.md               # This file
```

---

## 🚀 Installation

### Prerequisites

- **XAMPP** (Apache + MySQL + PHP) installed on your system
- **Git** (optional, for version control)
- Modern web browser (Chrome, Firefox, Safari, Edge)

### Setup Steps

1. **Navigate to XAMPP Directory**

   ```bash
   cd c:\xampp
   ```

2. **Start XAMPP Services**

   ```bash
   .\xampp_start.exe
   ```

   Or use the XAMPP Control Panel to start Apache and MySQL

3. **Access the Project**
   - Open your browser and navigate to: `http://localhost/MerryMeal/MerryMeal/`
   - You should see the MerryMeal homepage

4. **Configure Database** (if needed)
   - Create a new MySQL database: `merrymeal`
   - Copy `config.example.php` to `config.php`
   - Update database credentials in `config.php` (never commit actual credentials!)

5. **Clone Repository** (if using Git)
   ```bash
   git clone https://github.com/Hiru46/MerryMeal.git
   cd MerryMeal/MerryMeal
   ```

---

## 💻 Usage

### For External Users

1. **Homepage (index.html)**
   - View platform overview and mission
   - Browse featured menu items
   - Access contact and donation links

2. **Donation (Donor.html)**
   - Track fundraising progress
   - View donation milestones
   - Contribute to the cause

3. **Volunteering (volunteer.html)**
   - Learn about volunteer opportunities
   - Review FAQs
   - Join the volunteer team
   - Access volunteer profile (volunteer2.html)

4. **Food Information (food.html)**
   - Educational content about food safety
   - Learn about food handling practices

5. **Contact (contact/ContactUsPage.html)**
   - Send inquiries and feedback
   - Request support

### For Registered Users

**Login Pages by Role:**

- `/login/admin/` - Administrator dashboard
- `/login/member/` - Member profile and requests
- `/login/donor/` - Donor management
- `/login/volunteer/` - Volunteer scheduling
- `/login/caregiver/` - Caregiver tools
- `/login/partner/` - Partner dashboard
- `/login/rider/` - Rider delivery management

**Admin Dashboard Features:**

- Manage all users (add, edit, delete)
- View member, donor, and volunteer lists
- Manage orders and deliveries
- Monitor fundraising campaign
- Handle reviews and feedback

---

## 👥 User Roles

| Role          | Description                 | Access Level        |
| ------------- | --------------------------- | ------------------- |
| **Guest**     | Browse public information   | Read-only           |
| **Member**    | Request food assistance     | Member portal       |
| **Donor**     | Contribute food/funds       | Donor dashboard     |
| **Volunteer** | Assist with operations      | Volunteer tools     |
| **Caregiver** | Support vulnerable groups   | Caregiver panel     |
| **Partner**   | Collaborate as organization | Partner dashboard   |
| **Rider**     | Deliver donations           | Delivery management |
| **Admin**     | Oversee all operations      | Full control        |

---

## ⚙️ Configuration

### Database Setup

1. Copy configuration template:

   ```bash
   cp config.example.php config.php
   ```

2. Edit `config.php` with your credentials:

   ```php
   define('DB_HOST', 'localhost');
   define('DB_USER', 'root');
   define('DB_PASS', 'your_password');
   define('DB_NAME', 'merrymeal');
   ```

3. **IMPORTANT:** Never commit `config.php` with real credentials!
   - It's protected by `.gitignore`
   - Always use `.example.php` template

### Environment Variables

For production, use environment variables instead:

```bash
DB_HOST=localhost
DB_USER=root
DB_PASS=secure_password
DB_NAME=merrymeal
```

See `GIT_GUIDELINES.md` for security best practices.

---

## 👨‍💼 Contributors

This project was developed by a talented 5-member team in September 2022:

- **Team Member 1** - Project Lead & Backend
- **Team Member 2** - Frontend & UI/UX
- **Team Member 3** - Database & Admin Panel
- **Team Member 4** - User Authentication
- **Team Member 5** - Testing & Documentation

> Note: Individual names can be added here as team members are identified

---

## 🔒 Security

### Best Practices Implemented

✅ **Credentials Protection**

- Database credentials in `.gitignore`
- Configuration template provided
- No secrets committed to repository

✅ **Code Quality**

- Semantic HTML for accessibility
- ARIA labels for screen readers
- Parameterized database queries (recommended)
- Input validation on forms

✅ **External Links**

- `rel="noopener"` on target="\_blank" links
- Safe social media integration

### For Contributors

- Follow `GIT_GUIDELINES.md` before committing
- Never commit `.env` or `config.php` files
- Review security checklist before pushing

---

## 📝 License

This project was completed as a group academic project in September 2022.

---

## 🤝 Contributing

To contribute to this project:

1. Create a new branch for your feature
2. Make your changes
3. Follow `GIT_GUIDELINES.md` security practices
4. Commit with clear, descriptive messages
5. Push to your fork and create a pull request

---

## 📧 Support & Contact

For questions or issues:

- Use the Contact page: `contact/ContactUsPage.html`
- Submit feedback through the platform contact form
- Open an issue on GitHub (if repository is public)

---

## 🚀 Future Enhancements

Potential improvements for future versions:

- Mobile app development (iOS/Android)
- Real-time notifications
- Advanced analytics dashboard
- Integration with payment gateways
- Machine learning for donation matching
- Multi-language support
- Email notifications system
- SMS alerts for time-sensitive deliveries

---

## 📅 Project Timeline

- **Started:** 2022
- **Completed:** September 2022
- **Type:** 5-member group project
- **Current Status:** Functional and deployed

---

_"Making a difference, one meal at a time - MerryMeal"_ 🍽️
