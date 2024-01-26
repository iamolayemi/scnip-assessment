# Scnip Backend Developer Assessment

This repository contains the solutions to scnip backend developer assessment role.

## Getting Started

> This guide assumed you have [PHP 8.1+](https://php.net/releases/) and [Composer](https://getcomposer.org/) installed on your pc.
> 
### Clone and Navigate
Clone this repository and navigate into it:

```bash
git clone https://github.com/iamolayemi/scnip-assessment.git 

cd scnip-assessment
```

### Install Dependencies
```bash 
composer install
```

### Running the Example Script.
To run the example script:
```bash
php main.php
```

This should display a formatted output similar to the one below in the console.
```bash
Products Without Sorting
+----+-----------------+-------+-------------+-------------+------------+
| ID | Name            | Price | Sales Count | Views Count | Created At |
+----+-----------------+-------+-------------+-------------+------------+
| 1  | Alabaster Table | 12.99 | 32          | 730         | 2019-01-04 |
| 2  | Zebra Table     | 44.49 | 301         | 3279        | 2012-01-04 |
| 3  | Coffee Table    | 10    | 1048        | 20123       | 2014-05-28 |
+----+-----------------+-------+-------------+-------------+------------+

Products Sorted By Price
+----+-----------------+-------+-------------+-------------+------------+
| ID | Name            | Price | Sales Count | Views Count | Created At |
+----+-----------------+-------+-------------+-------------+------------+
| 3  | Coffee Table    | 10    | 1048        | 20123       | 2014-05-28 |
| 1  | Alabaster Table | 12.99 | 32          | 730         | 2019-01-04 |
| 2  | Zebra Table     | 44.49 | 301         | 3279        | 2012-01-04 |
+----+-----------------+-------+-------------+-------------+------------+

Products Sorted By Sales Per View
+----+-----------------+-------+-------------+-------------+------------+
| ID | Name            | Price | Sales Count | Views Count | Created At |
+----+-----------------+-------+-------------+-------------+------------+
| 1  | Alabaster Table | 12.99 | 32          | 730         | 2019-01-04 |
| 3  | Coffee Table    | 10    | 1048        | 20123       | 2014-05-28 |
| 2  | Zebra Table     | 44.49 | 301         | 3279        | 2012-01-04 |
+----+-----------------+-------+-------------+-------------+------------+
```

You can open and edit the `main.php` file with your preferred IDE or code editor to experiment with different sorting scenarios.

### Adding a New Sorter
To add a new sorter, follow these steps:

1. Create a new class in the `src/Sorters` folder that implements the `ProductSorter` interface.
2. Implement the `sort` method in the new sorter class.

## Testing  
To run unit tests, execute the following command:
```bash
composer test
```
