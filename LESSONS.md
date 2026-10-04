# StudyTracker — Lessons

## 2026-10-04 — Feature completeness is different from code completeness

The repository already contains CRUD routes, a model, migration, controller, and Blade views.

That does not mean the feature is complete.

A feature must also be verified through valid input, invalid input, persistence, navigation, filtering, edge cases, and automated tests.

## 2026-10-04 — Do not trust names alone

The migration history contains a typo, studiet_at, followed by a rename migration.

The current model, controller, and views use studied_at.

This is a useful reminder to inspect actual database schema and migration history instead of assuming names are correct.

## 2026-10-04 — Keep learning scope aligned with the project

StudyTracker should teach Laravel and web development.

Python should remain the separate track for programming fundamentals and problem solving.

There is no need to force Python into the Laravel application.