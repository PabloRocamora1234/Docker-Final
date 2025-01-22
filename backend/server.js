const express = require('express');
const mysql = require('mysql');
const app = express();
const port = 9000;

const db = mysql.createConnection({
  host: 'db',
  user: 'user',
  password: 'password',
  database: 'laravel'
});

db.connect(err => {
  if (err) {
    console.error('Error connecting to the database:', err);
    return;
  }
  console.log('Connected to the database');
});

app.get('/api/data', (req, res) => {
  db.query('SELECT * FROM your_table', (err, results) => {
    if (err) {
      console.error('Error fetching data:', err);
      res.status(500).send('Error fetching data');
      return;
    }
    res.json(results);
  });
});

app.listen(port, () => {
  console.log(`Backend service running on port ${port}`);
});
