# Salt

## Tailwind Configuration

```
export default {
    theme: {
        extend: {
            fontFamily: {
                "instrument-sans": [
                    "Instrument Sans",
                    ...defaultTheme.fontFamily.sans,
                ],
                "instrument-serif": [
                    "Instrument Serif",
                    ...defaultTheme.fontFamily.serif,
                ],
            },
            boxShadow: {
                spread: "0 0 10px -1px rgba(255,255,255,0.4)",
            },
        },
    },
    plugins: [forms],
};
```

## Fonts

```
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,400i,500,500i,600,600i,700,700i|instrument-serif:400,400i" rel="stylesheet" />
```
