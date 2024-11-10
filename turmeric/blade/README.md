# Turmeric

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
             backgroundImage: {
                turmeric:
                    "url(\"data:image/svg+xml,%3Csvg width='12' height='16' viewBox='0 0 12 16' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M4 .99C4 .445 4.444 0 5 0c.552 0 1 .45 1 .99v4.02C6 5.555 5.556 6 5 6c-.552 0-1-.45-1-.99V.99zm6 8c0-.546.444-.99 1-.99.552 0 1 .45 1 .99v4.02c0 .546-.444.99-1 .99-.552 0-1-.45-1-.99V8.99z' fill='%23fcd34d' fill-opacity='1' fill-rule='evenodd'/%3E%3C/svg%3E\")",
                "turmeric-dark":
                    "url(\"data:image/svg+xml,%3Csvg width='12' height='16' viewBox='0 0 12 16' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M4 .99C4 .445 4.444 0 5 0c.552 0 1 .45 1 .99v4.02C6 5.555 5.556 6 5 6c-.552 0-1-.45-1-.99V.99zm6 8c0-.546.444-.99 1-.99.552 0 1 .45 1 .99v4.02c0 .546-.444.99-1 .99-.552 0-1-.45-1-.99V8.99z' fill='%23fcd34d' fill-opacity='0.33' fill-rule='evenodd'/%3E%3C/svg%3E\")",
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
