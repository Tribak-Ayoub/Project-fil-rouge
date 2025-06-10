# 📚 Project-fil-rouge – SOLI-LMS Documentation & Conception

This repository contains the **complete documentation, design, and technical planning** for the **Sanction Management Module** — a key part of the modular SOLI-LMS (Learning Management System).

It also includes a submodule linking to the actual source code of the module itself.

---

## 🗂️ Repository Structure

```

/
├── .vscode/                # VS Code settings
├── Design/                 # UX mockups, Class Diagram
├── Docs/                   # Design Thinking, Models
├── Functional Branch/      # User stories, Use cases
├── Technical Branch/       # Prototype, Technical analysis
├── Sanction-Management/    # 🔗 Git submodule containing the actual Laravel + Vue.js app
├── .gitmodules             # Git submodule tracking file
└── README.md               # You are here

````

---

## 📌 About This Module

- **Module Name:** Sanction Management  
- **Part of:** [SOLI-LMS](https://github.com/Tribak-Ayoub/Soli-LMS-fil-rouge)  
- **Goal:** Manage student sanctions automatically or manually, based on absenteeism rules configured by trainers.  
- **Approach:** Built using Agile Scrum and UX Design methodologies.

---

## 🔗 Submodule

This repo links to the actual implementation via a Git submodule:

➡️ `Sanction-Management/` → [Soli-LMS-fil-rouge](https://github.com/Tribak-Ayoub/Soli-LMS-fil-rouge/tree/PkgSanction)

To initialize the submodule after cloning:

```bash
git submodule update --init --recursive
````

---

## 🛠 Technologies (in the Submodule)

* **Back-end:** Laravel
* **Front-end:** Vue.js
* **Styling:** TailwindCSS
* **Database:** MySQL

---

## 👨‍💻 Author

**Ayoub Tribak**
Full-Stack Developer – Architected and built the Sanction Management module in SOLI-LMS.

---

## 📄 License

MIT License – see `LICENSE` for more details.
