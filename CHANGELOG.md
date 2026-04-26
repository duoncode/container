# Changelog

## [Unreleased](https://github.com/duoncode/container/compare/0.3.0...HEAD)

No changes yet.

## [0.3.0](https://github.com/duoncode/container/releases/tag/0.3.0) (2026-04-26)

### Breaking

- `Entry::asIs()` was renamed to `Entry::value()`.
- `Entry::reify()` was removed.
- The root container now seals internal structural mutation after the first `scope()` call.
- Shared entries now resolve in definition-owner context, while scoped and transient entries resolve in requester context.
- Wrapped PSR container fallback now routes through the root container during scoped resolution.

### Added

- Explicit `Entry` lifetimes with `shared()`, `scoped()`, `transient()`, and `lifetime(...)`.
- `Container::scope()` for isolated per-unit-of-work containers.
- `Resettable` and scope-local `Container::reset()` cleanup support.

### Changed

- `Container` now keeps runtime instances in container-local caches instead of on `Entry` objects.
- `Container::definition()` now resolves definitions through parent containers (for example from tags).
- Scope tags now layer over matching root tags and keep scope-local caches.
- Scope reset now clears local entries/caches and resets used resettable services (including scope tags).

## [0.2.0](https://github.com/duoncode/container/releases/tag/0.2.0) (2026-02-21)

Project renamed from duon/registry to duon/container.

Codename: Jonas

### Changed

- Package renamed from `duon/registry` to `duon/container`
- Namespace changed from `Duon\Registry` to `Duon\Container`
- Main class renamed from `Registry` to `Container`
- Parameter `includeRegistry` renamed to `includeContainer`

## [0.1.0](https://github.com/duoncode/registry/releases/tag/0.1.0) (2026-01-30)

Initial release.

### Added

- PSR-11 compatible dependency injection container
- Service registration and resolution
- Autowiring support via duon/wire integration
