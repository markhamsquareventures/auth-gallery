<p align="center">
  <img src="/art/cover.jpg" alt="Cover image of Auth.Gallery" />
</p>

# Free, handcrafted auth screens for Laravel projects.

Auth screens are designed to be dropped into Laravel 11+ projects.

We use Tailwind CSS for styling and try to preseve as much Laravel default behavior as possible.

We currently only provide Blade templates, but would like to expand to include Vue, React, and other frameworks in the future.

### Folder structure

Each auth screen in the gallery has its own folder in this repo, structured like this:

```
├── <auth-screen-name>
│   ├── blade
│   │   ├── components
│   │   │   ├── <component-name>.blade.php
│   │   ├── layouts
│   │   │   ├── <layout-name>.blade.php
│   │   ├── README.md
│   │   ├── register.blade.php
```

The `README.md` file in each folder calls out any specific instructions or customizations required to add it to your project. Typically, this includes additions to your `tailwind.config.js` file, any Heroicons or HeroPatterns used in the design, and the fonts required.

### Components

Our components override the default ones provided by Laravel. While you're welcome to copy and paste them into your project however you like, we recommend creating a sub-directory in your `components` and using the `.` notation to reference them as explained [here](https://laravel.com/docs/11.x/blade#anonymous-components) in the Laravel docs.

```
// Folder structure
├── components
│   ├── <auth-screen-name>
│   │   ├── <component-name>.blade.php

├── components
│   ├── salt
│   │   ├── text-input.blade.php

// Template usage
<x-<auth-screen-name>.<component-name> />

<x-salt.text-input />
```

For convenience, we've prefixed all of the components used in the templates with the name of the auth screen.

### Layouts

Typically, we only customize the `guest` layout. But, these changes will override the default one provided by Laravel.

We recommend copying the `guest` layout into your project to replace the default one.

If you would like to keep the default one, you should register the new layout in `app/View/Components`.

## Credits

- [Nick Basile](https://github.com/nickbasile)
- [Matt Basile](https://github.com/mattbasile)

Thank you to [Laravel](https://laravel.com/) for everything and the initial designs.

Thank you to [Heroicons](https://heroicons.com/) and [HeroPatterns](https://www.heropatterns.com/) for the icons and patterns.

And a special thanks to [Spatie](https://spatie.be) for inspiring our documentation approach.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
