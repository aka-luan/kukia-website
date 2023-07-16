# Kukia-Website

Kukia-Website is a repository dedicated to the study and practice of WordPress theme creation, CSS layouts, and UI development. The project uses a variety of technologies such as HTML, SASS, PHP, JavaScript, and Larapress. Larapress is a blank WordPress theme inspired by Laravel and based on Underscores.

## Requirements

- WordPress ^5.9
- PHP ^7.4
- Node.js ^14.16.1
- NPM ^6.14.12

## Getting Started

To begin working with the Kukia-Website repository, follow these installation steps:

### Installation

1. Clone the repository inside your project's `wp-content/themes` directory and then navigate to the `larapress` directory:

```
git clone https://github.com/your-username/kukia-website.git kukia-website
cd kukia-website
```

2. Remove the .git folder to clear the repository's history. If necessary, you can then initialize a new git repository:

```
rm -rf .git
git init
```

3. Install all necessary dependencies with npm:

```
npm install
```

### Development

While developing, use Laravel Mix to bundle your assets:

```
npm run watch
```

Larapress uses Laravel Mix to compile assets for development. 

### Production

When you're ready to prepare your code for production, use the following command:

```
npm run prod
```

This command will optimize your code for a production environment.

## Contribute

If you want to contribute to this project and make it better, your help is very welcome. Create a pull request with your suggested changes.

## License

This project is licensed under the MIT License.
