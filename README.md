[![Netlify Status](https://api.netlify.com/api/v1/badges/b938180f-d803-4928-9845-356108d52354/deploy-status)](https://app.netlify.com/sites/sneakvert-dev/deploys)

# [SneakVert](https://github.com/Jorbeatz/SneakVert)
> Web Application For Sneaker Conversions

[See a demo here](https://sneakvert-dev.netlify.com/)

## Stack
*	React (Create-React-App)
* 	React-Redux
*  	React-Router
*  	Eslint
*   Enzyme
*   Jest

## Getting Started
The project can be accessed [here](https://github.com/Jorbeatz/SneakVert) Github

### Quick Start
```bash
$ git clone git@github.com:Jorbeatz/SneakVert.git
$ npm install
$ npm start
```

### Client Installation
If you do not have it already, please install [node](https://nodejs.org/en/) **v8.10.0**

Run the following command within the **client/mazopear** directory
```bash
npm install
```

To start a local instance of the web application, run
```bash
npm start
```

### Formatting JavaScript Code
We utilize AirBnB's popular style guide to format our JS code

To run ESLint, run the following command within the **client/mazopear** directory
```bash
./node_modules/.bin/eslint fileName.js
```
### Testing React Components
We use Jest and Enzyme to test our JavaScript code

```bash
npm test
```

## NPM Commands

|Command|Description|
|---|---|
|npm start|Start webpack development server @ **localhost:3000**|
|npm run build|Build production bundles to **./build** directory|
|npm test|Run smoke tests to verify components render|
