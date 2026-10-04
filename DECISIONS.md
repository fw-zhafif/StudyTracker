# StudyTracker — Decisions

## 2026-10-04 — Keep the project intentionally simple

### Context

Apip is in semester 1, learning programming fundamentals with Python while learning Laravel through StudyTracker.

The project should produce real development experience without becoming too complex.

### Decision

Use StudyTracker as a small Laravel learning laboratory.

Prioritize: Correctness → Understanding → Simplicity → Maintainability

Avoid adding technologies that are not needed for the current learning objective.

### Consequences

The roadmap deliberately excludes React, APIs, Docker, microservices, Redis, queues, and AI features from V1.

## 2026-10-04 — Learn Laravel through the full request lifecycle

Features should be developed so Apip can understand:

Route → Controller → Request/Validation → Model/Eloquent → Database → View/Redirect

The AI should explain important framework behavior instead of hiding it behind abstractions.