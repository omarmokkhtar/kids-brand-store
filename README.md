## Kids Brand Store

### Instructions 
* Clone repository to your machine:
```
gh repo clone omarmokkhtar/kids-brand-store
```
* Install dependencies:
```
    composer install
```

* Run the project:
```
php artisan serve
```
then access the link from the browser through this link
```
http://127.0.0.1:8000/
```

- Each product has been presented separately with available sizes and pagination option.
- For this test, I used a package called XmlToArray to parse the XML into an array to be able to manipulate the given data.
- The service layer has been designed to include all the necessary logic.
- Ideally I would have a script to save the data first into the database in chunks and retrieve them `migration file has been added as example`
