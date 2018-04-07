# Design_patterns

Must to know Design Patterns

`> composer install`

## Adapter

An adapter allows two incompatible interfaces to work together. This is the real-world definition for an adapter. Interfaces may be incompatible, but the inner functionality should suit the need. The Adapter design pattern allows otherwise incompatible classes to work together by converting the interface of one class into an interface expected by the clients.

In the example, Person can read book only, but with KindleAdapter, Kindle is compatible with the Book.

`php src/Adapter/index.php`


## Decorator

- What problems can the Decorator design pattern solve?

>Responsibilities should be added to (and removed from) an object dynamically at run-time.
A flexible alternative to subclassing for extending functionality should be provided.
When using subclassing, different subclasses extend a class in different ways. But an extension is bound to the class at compile-time and can't be changed at run-time.

- What solution does the Decorator design pattern describe?

>Define Decorator objects that:

>implement the interface of the extended (decorated) object (Component) transparently by forwarding all requests to it and
perform additional functionality before/after forwarding a request.
This enables to work through different Decorator objects to extend the functionality of an object dynamically at run-time.
See also the UML class and sequence diagram below. 
