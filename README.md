## How To Test Project 

### Install Docker

First make sure that docker has been installed and configured properly to your system. 

[Docker Documentation](https://docs.docker.com/engine/install/)

### Clone Project 

```
git clone git@github.com:joni-dot/simple-shop.git
```

### Install Composer Packages

```
composer install
```

### Copy Env - files

```
cp .env.example .env 
```

```
cp .env.testing.example .env.testing
```

### Start Sail 

```
./vendor/bin/sail up
```

### Generate App Key

```
./vendor/bin/sail artisan key:generate
```

### Seed Database With Test Data (Artisan Command)

```
./vendor/bin/sail artisan test:create-test-env
```

Now there should be some test products for testing and if your want to log in to the system, you can use credentials: 

```
Username: admin@example.com
Password: password 
``` 

For example, you can add products to the system only if you are logged in. 

### Navigate To WebShop

You should be able to see WebShop when you navigate to address: 

```
localhost:8080/
```

#### Tips 

##### Turn Off Sail After Testing 

```
./vendor/bin/sail down
```

### Thank You

- **[Tailblock](https://tailblocks.cc/)** (Lot's of TailwindCSS elements)
- **[Laravel Jetstream](https://jetstream.laravel.com/2.x/introduction.html/)** (Starter kit for Laravel)
- **[Laravel Livewire](https://laravel-livewire.com/)** (Full-stack framework to build dynamic interfaces)
- **[Tailwind Starter Kit](https://www.creative-tim.com/learning-lab/tailwind-starter-kit/presentation/)** (Lot's of TailwindCSS components)
- **[Bladem CSS Icons](https://github.com/khatabwedaa/blade-css-icons/)** (Icon set)