# StudyTracker — Architecture

## Current Architecture

StudyTracker is a server-rendered Laravel application.

Current flow:

Browser → web route → controller → Eloquent/database → Blade view or redirect

The primary domain concept is StudySession.

## Components

| Component | Responsibility |
|---|---|
| routes/web.php | HTTP route definitions |
| StudySessionController | request handling and CRUD/query logic |
| StudySession | Eloquent representation of study sessions |
| migrations | database schema |
| Blade views | HTML presentation |
| validation | input constraints at request boundary |
| session flash | short-lived user feedback |
| tests | automated behavior verification |

## Current Domain Model

StudySession:
- id
- subject
- duration
- studied_at
- completed
- created_at
- updated_at

There is currently no relationship between StudySession and User.

## Architectural Direction

Keep the application server-rendered and conventional while learning Laravel.

Do not introduce service layers, repositories, APIs, frontend frameworks, or other abstractions until the project has a concrete reason for them.

## Intended Next Relationship

Later, if subject management becomes necessary:

User → StudySessions
Subject → StudySessions

Introduce this as a learning step for database relationships, not speculative architecture.

## Important Trade-off

Free-text subject is simpler and appropriate for the current MVP.

A separate subjects table provides stronger data integrity and teaches relational modeling, but adds CRUD and relationship complexity.

Therefore: keep free-text subject for Phase 1 and introduce Subject in Phase 2 only when the MVP is stable.