# StudyTracker — Project Context

## Overview

**Project:** StudyTracker
**Repository:** fw-zhafif/StudyTracker
**Status:** Early development
**Framework:** Laravel
**Default branch:** main

## Problem

StudyTracker is intended to help manage and track study sessions.

The repository is still close to a Laravel starter application, with study-session CRUD routes already introduced.

## Goal

Build a practical study-tracking application while using it as a vehicle for learning Laravel, PHP, databases, web application architecture, testing, and software engineering.

## Current State

Known from the repository:

- Laravel 13.17
- PHP ^8.3
- Vite 8
- Tailwind CSS 4
- A StudySessionController is referenced by the web routes.
- Study-session routes currently support index, create, store, edit, update, and destroy.
- The default User model exists.
- The README still largely contains the Laravel starter README.

## AI Working Context

When modifying this project, inspect the existing implementation before proposing structural changes.

Treat StudyTracker as both a real software project and a learning environment for Apip.

Do not add complexity merely to make the project look production-grade. Prefer the simplest architecture that supports current requirements and learning goals.

## Known Gaps

Verify these before relying on them:

- actual database schema and migrations
- StudySession model implementation
- StudySessionController implementation
- Blade views
- validation rules
- authentication requirements
- automated test coverage
- current UI/UX requirements

Do not assume these are complete merely because routes exist.

## Working Rule

Understand → Design → Implement → Test → Review → Record durable lessons or decisions when useful
