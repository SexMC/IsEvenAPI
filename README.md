# IsEvenAPI

The **IsEvenAPI** is the most advanced and fastest `isEven` method available in the PocketMine-MP space. With an optimized index of **696,969** even and odd numbers, this plugin allows for ultra-fast even-number checking, ensuring minimal performance impact.

## Features
- **Blazing Fast:** Uses pre-indexed even and odd numbers for instant lookup.
- **Easy to Use:** Simple API integration for developers.
- **PocketMine-MP Optimized:** Built for maximum efficiency in PocketMine-MP servers.

## Installation
1. Download the latest release of **IsEvenAPI**.
2. Place the `.phar` file into your `plugins/` directory.
3. Restart your PocketMine-MP server.
4. Done! The API is now ready to use.

## Usage
To check if a number is even, use the following method:

```php
$isEven = Server::getInstance()->getPluginManager()->getPlugin("IsEvenAPI")->getIsEvenAPI()->isEven(int $num);
```

### Example:
```php
if ($isEvenAPI->isEven(42)) {
    echo "42 is even!";
} else {
    echo "42 is odd!";
}
```

## Why Use IsEvenAPI?
Unlike traditional modulo operations (`$num % 2 === 0`), **IsEvenAPI** leverages a **pre-built index** for rapid number classification, making it the **fastest** method available for checking even numbers in PocketMine-MP.

## License
This project is open-source and available under the **MIT License**.

---

💡 **Need Support?** Join the PocketMine-MP community for assistance!

