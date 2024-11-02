# Philippines Holidays

Philippines Holidays is a Laravel package that provides a comprehensive and organized list of holidays in the Philippines. It allows you to easily retrieve holidays for specific months or get all holidays in JSON format.

## Installation

Install the package via Composer:

```bash
composer require kiner/philippines-holidays
```

Publish the configuration file:

```bash
php artisan vendor:publish --provider="Kiner\PhilippinesHolidays\PhilippinesHolidaysServiceProvider"
```

## Configuration

The configuration file `philippines_holidays.php` will be published in your config directory. You can customize the list of holidays or add your own.

## Usage

### Retrieve All Holidays

Use the `Holidays::all()` method to get all holidays:

```bash
use Kiner\PhilippinesHolidays\Holidays;

$holidays = Holidays::all();
return response()->json($holidays);
```

## Retrieve Holidays by Month

Use the `Holidays::month()` method to fetch holidays for a specific month by name or number:

```bash
use Kiner\PhilippinesHolidays\Holidays;

// Using the month name
$januaryHolidays = Holidays::month('January');

// Using the month number
$aprilHolidays = Holidays::month(4);

return response()->json($januaryHolidays);
```

## Example Output

### All Holidays

```bash
{
    "January": {
        "New Year's Day": "January 1",
        "Chinese New Year": "Movable (based on the Lunar calendar)"
    },
    "April": {
        "Araw ng Kagitingan": "April 9"
    },
    "December": {
        "Christmas Day": "December 25",
        "Rizal Day": "December 30"
    }
}
```

### Holidays for January

```bash
{
    "New Year's Day": "January 1",
    "Chinese New Year": "Movable (based on the Lunar calendar)"
}
```

## Testing

Run unit tests to ensure the package works as expected:

```bash
vendor/bin/phpunit tests
```

## Contributing

Contributions are welcome! Please fork the repository, create a new branch, and submit your changes via a pull request.

### Steps to Contribute:

1. Fork the repository.
2. Create a new branch for your feature or bug fix.
3. Submit your pull request with a detailed description.

## License

This package is open-source software licensed under the MIT license.

## Credits

Author: Kiner
Inspired by the rich culture and history of the Philippines

## Support

For any questions or support, feel free to open an issue on the GitHub repository.

```bash
This is the pure code version of the `README.md` without any extra formatting or embellishments. Let me know if you need any adjustments!
```
