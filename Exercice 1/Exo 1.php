<?php

SELECT *
FROM  users
LEFT JOIN articles ON users.id = articles.content