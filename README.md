#True Compliance Test
--------------------

#### 1. Using Laravel, MySQL and the enclosed data create an API that serves data to the following endpoints:

* GET /property                       - Returns properties 
* GET /property/{id}                  - Returns a property «
* POST /property                      - Creates a new property «
* PATCH /property/{id}                - Updates a property «
* DELETE /property/{id}               - Deletes a property «

* GET /property/{id}/certificate      - Returns the certificates of a property «

* GET /property/{id}/note             - Returns the notes of a property «
* POST /property/{id}/note            - Creates a note for a property

* GET /certificate                    - Returns certificates «
* GET /certificate/{id}               - Returns a certificate «
* POST /certificate     		      - Creates a certificate «

* GET /certificate/{id}/note          - Returns the notes of a certificate «
* POST /certificate/{id}/note         - Creates a note for a certificate «


## 2. Write a MySQL raw query & eloquent query to get properties which has more than 5 certificates «

* 2.1 Write a MySQL raw query to get properties which has more than 5 certificates «

```
SELECT * FROM `certificates` c INNER JOIN `properties` p ON c.property_id = p.id GROUP BY property_id HAVING COUNT(*) > 5; 
```

## :tada: :tada: :tada:
