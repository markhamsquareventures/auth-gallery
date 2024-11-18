# Cardamom

## Tailwind Configuration

```
export default {
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            boxShadow: {
                cardamom: "5px 5px 0 rgba(0,0,0,1)",
            },

        },
    },
    plugins: [forms],
};
```

## Fonts

```
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
```

## Additional Configuration

This auth screen splits the default name field into first and last fields. It also removes the confirm password field.

You will need to update your User model and authentication logic accordingly.
