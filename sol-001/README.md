
# 📄  Solicitation #001 

## 🎯 Screen Purpose
To enable the **registration**, **editing**, and **viewing** of client data in a clear, intuitive, and responsive way. This screen will be used by both administrators and operators.

---

## 🧩 Screen Components

### 1. Title and Breadcrumb
- Main title: `Client Registration`
- Breadcrumb: `Home > Clients > Registration`

### 2. Registration Form
- **Fields:**
  - Full Name (text input)
  - Email (email input)
  - Phone (input mask)
  - CPF/CNPJ (input mask and automatic validation)
  - Date of Birth (date input)
  - Status (dropdown: Active/Inactive)
- **Buttons:**
  - `Save` (primary)
  - `Cancel` (secondary, returns to the list view)

### 3. Validation
- Display error messages below fields when validation fails (Laravel validation style).
- Required fields must be marked with a red asterisk `*`.

---

## 🎨 Visual Style (UI)

### 📌 Layout
- The layout should be **centered** with a max width of `max-w-4xl`, using `mx-auto`.
- Must be **responsive** for both desktop and mobile.
- Cards and sections should have **rounded borders** (`rounded-xl`), **soft shadows** (`shadow-md`), and **internal padding** (`p-6`).

### 🎨 Color Palette
- **Primary:** `#2563EB` (`blue-600`)
- **Secondary:** `#4B5563` (`gray-600`)
- **Background:** `#F9FAFB` (`gray-100`)
- **Primary Button:** `bg-blue-600 hover:bg-blue-700 text-white`
- **Secondary Button:** `bg-gray-200 hover:bg-gray-300 text-gray-800`

### 🔤 Fonts and Typography
- Default font: `Inter`, `sans-serif`
- Title: `text-2xl font-semibold text-gray-800`
- Labels: `text-sm text-gray-700 font-medium`
- Inputs: `text-sm text-gray-800 border-gray-300 focus:ring-2 focus:ring-blue-500`

---

## 📱 Responsiveness
- The screen should adapt to mobile devices using `grid-cols-1` as fallback and `grid-cols-2` from `md:` breakpoint onwards.

---

## 🧠 Final Notes
- The form should use the **default CSRF Token** from Laravel.
- In edit mode, fields should be pre-filled.
- For error and success messages, use Tailwind `alert` components with colors `red-500` and `green-500` respectively.
