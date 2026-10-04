# StudyTracker — Roadmap

## North Star

Build a small, understandable study-tracking web application that is useful enough to use and simple enough for Apip to understand the Laravel stack underneath it.

The project is a learning laboratory, not a showcase for maximum technology.

## Phase 0 — Stabilize the Foundation

- [ ] Fix current Blade/routing issues.
- [ ] Verify migrations from a clean database.
- [ ] Verify create, read, update, delete flows manually.
- [ ] Verify validation and error display.
- [ ] Add feature tests for core study-session flows.
- [ ] Remove starter/demo artifacts that are no longer useful.
- [ ] Replace Laravel starter README with project documentation.
- [ ] Understand request lifecycle: route → controller → validation → model → database → view/redirect.

Learning focus: HTTP, routing, controllers, request data, validation, Eloquent, migrations, Blade, sessions, testing.

## Phase 1 — Make the MVP Coherent

- [ ] Study session list
- [ ] Create session
- [ ] Edit session
- [ ] Delete session
- [ ] Mark session completed
- [ ] Search by subject
- [ ] Filter by completion
- [ ] Filter by subject
- [ ] Sort by study date
- [ ] Preserve active filters when navigating
- [ ] Basic, readable UI

Learning focus: query builder/Eloquent, GET query parameters, form handling, Blade partials, reusable UI, CRUD conventions.

## Phase 2 — Add One Meaningful Domain Concept

Introduce Subject as a separate model only after Phase 1 is stable.

- [ ] Subject model
- [ ] Subjects migration
- [ ] StudySession belongs to Subject
- [ ] Subject has many StudySessions
- [ ] Simple subject management
- [ ] Replace free-text subject with a relationship
- [ ] Learn foreign keys and Eloquent relationships

Learning focus: database normalization, primary/foreign keys, relationships, Eloquent relationship queries.

## Phase 3 — Authentication and Ownership

- [ ] Add simple authentication using a Laravel-supported approach when needed.
- [ ] Associate study sessions with users.
- [ ] Ensure users can only access their own sessions.
- [ ] Add authorization where appropriate.

Learning focus: authentication, middleware, authorization, user relationships, security boundaries.

## Phase 4 — Dashboard and Useful Aggregation

- [ ] Total study time
- [ ] Sessions completed
- [ ] Study time by subject
- [ ] Recent sessions
- [ ] Simple weekly/monthly summary

Learning focus: aggregation, SQL concepts, Eloquent queries, date handling, derived data.

## Phase 5 — Quality and Deployment

- [ ] Expand feature-test coverage.
- [ ] Add realistic factories/seeders.
- [ ] Add validation and edge-case tests.
- [ ] Clean architecture only where real duplication appears.
- [ ] Configure production environment.
- [ ] Deploy the application.
- [ ] Document setup and deployment.

## Explicitly Out of Scope for V1

Do not add these merely because they are technically interesting:

- React
- Vue
- SPA architecture
- REST API
- mobile app
- Docker
- microservices
- queues
- Redis
- complex analytics
- AI features
- elaborate design systems

## Learning Strategy

StudyTracker should progress in this order:

CRUD → Database → Relationships → Authentication → Aggregation → Testing → Deployment

Python remains a separate learning track for programming fundamentals and problem solving. It should not be forced into StudyTracker.

## Definition of Success

Apip should eventually be able to explain:

1. what happens when a browser requests a StudyTracker URL;
2. how Laravel chooses the route and controller;
3. how request data is validated;
4. how Eloquent reads and writes the database;
5. how migrations define database structure;
6. how Blade receives and renders data;
7. how authentication and authorization protect user data;
8. how tests verify application behavior;
9. why the architecture is simple rather than merely saying because Laravel does it.