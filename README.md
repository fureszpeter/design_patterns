# Design_patterns

Must to know Design Patterns

`> composer install`

## Adapter

An adapter allows two incompatible interfaces to work together. This is the real-world definition for an adapter. Interfaces may be incompatible, but the inner functionality should suit the need. The Adapter design pattern allows otherwise incompatible classes to work together by converting the interface of one class into an interface expected by the clients.

In the example, Person can read book only, but with KindleAdapter, Kindle is compatible with the Book.

`php src/Adapter/index.php`
 
