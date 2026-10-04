# StudyTracker — Project Context

## Overview

Project: StudyTracker
Repository: fw-zhafif/StudyTracker
Status: Early development
Framework: Laravel 13.17
PHP: ^8.3
Default branch: main

## Why This Project Exists

Apip is a semester-1 Informatics Engineering student who is still exploring programming and building foundational skills.

Python is currently a separate learning track for programming fundamentals and problem solving.

StudyTracker is the main practical Laravel project: it should stay small enough to understand while being substantial enough to develop real developer skills and learn how Laravel works internally.

## Learning Goal

StudyTracker is not intended to demonstrate every modern web technology.

It is a learning laboratory for:
- web application fundamentals
- HTTP and request/response flow
- Laravel routing and controllers
- validation
- Blade
- Eloquent ORM
- SQL and database design
- migrations
- relationships
- authentication and authorization
- testing
- Git and software-engineering workflow

## Current State

Known from the repository:
- Laravel 13.17
- PHP ^8.3
- Vite 8
- Tailwind CSS 4
- StudySession model
- StudySession CRUD routes and controller
- search/filter/sort logic
- Blade create/edit/index views
- migrations for study_sessions
- basic PHPUnit configuration
- only starter-level automated tests
- no authentication flow for StudyTracker yet
- no user ownership relation for StudySession yet

## Current Domain

StudySession has:
- subject
- duration
- studied_at
- completed
- timestamps

## Known Technical Issues

- The study-session index Blade contains a malformed route expression that should be fixed before further feature work.
- The controller's query/filter logic needs cleanup and better test coverage.
- The migration history contains an early column typo, studiet_at, followed by a rename migration to studied_at.
- README is still largely Laravel starter documentation.
- Starter/demo files should eventually be cleaned up.

## Product Scope

Keep V1 intentionally small.

Core V1:
- study-session CRUD
- completion status
- search
- filters
- sorting
- basic UI
- validation
- tests

Later learning steps:
CRUD → Database → Relationships → Authentication → Aggregation → Testing → Deployment

Explicitly avoid unnecessary complexity in V1: React, Vue, SPA architecture, REST API, Docker, microservices, Redis, queues, complex analytics, and AI features.

## AI Collaboration Rule

Before substantial changes, inspect the existing implementation.

Treat every feature as both software work and a learning opportunity.

Use the chain:
Concept → Mechanism → Implementation → Trade-off

Give direct solutions when useful, but do not hide important reasoning or framework behavior.

Do not turn simple tasks into lectures.

Preserve signal, not volume, in project documentation.