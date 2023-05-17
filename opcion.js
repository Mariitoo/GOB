// JavaScript source code
const express = require('express');
const app = express();
const multer = require('multer');

// Configurar multer para manejar la carga de archivos
const upload = multer({ dest: 'uploads/' });

// Manejar la carga de archivos según la opción seleccionada
app.post('/opcion1', upload.single('file'), (req, res) => {
    // Procesar el archivo cargado en req.file
    // ...
    res.send('Archivo cargado correctamente en la opción 1.');
});

app.post('/opcion2', upload.single('file'), (req, res) => {
    // Procesar el archivo cargado en req.file
    // ...
    res.send('Archivo cargado correctamente en la opción 2.');
});

app.post('/opcion3', upload.single('file'), (req, res) => {
    // Procesar el archivo cargado en req.file
    // ...
    res.send('Archivo cargado correctamente en la opción 3.');
});

app.post('/opcion4', upload.single('file'), (req, res) => {
    // Procesar el archivo cargado en req.file
    // ...
    res.send('Archivo cargado correctamente en la opción 4.');
});

app.post('/opcion5', upload.single('file'), (req, res) => {
  // Procesar el archivo cargado en req.file