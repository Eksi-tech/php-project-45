### Hexlet tests and linter status:
[![Actions Status](https://github.com/Eksi-tech/php-project-45/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/Eksi-tech/php-project-45/actions)
[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=Eksi-tech_php-project-45&metric=alert_status)](https://sonarcloud.io/summary/new_code?id=Eksi-tech_php-project-45)
[![Bugs](https://sonarcloud.io/api/project_badges/measure?project=Eksi-tech_php-project-45&metric=bugs)](https://sonarcloud.io/summary/new_code?id=Eksi-tech_php-project-45)
[![Code Smells](https://sonarcloud.io/api/project_badges/measure?project=Eksi-tech_php-project-45&metric=code_smells)](https://sonarcloud.io/summary/new_code?id=Eksi-tech_php-project-45)
[![Duplicated Lines (%)](https://sonarcloud.io/api/project_badges/measure?project=Eksi-tech_php-project-45&metric=duplicated_lines_density)](https://sonarcloud.io/summary/new_code?id=Eksi-tech_php-project-45)
[![Lines of Code](https://sonarcloud.io/api/project_badges/measure?project=Eksi-tech_php-project-45&metric=ncloc)](https://sonarcloud.io/summary/new_code?id=Eksi-tech_php-project-45)
[![Reliability Rating](https://sonarcloud.io/api/project_badges/measure?project=Eksi-tech_php-project-45&metric=reliability_rating)](https://sonarcloud.io/summary/new_code?id=Eksi-tech_php-project-45)
[![Security Rating](https://sonarcloud.io/api/project_badges/measure?project=Eksi-tech_php-project-45&metric=security_rating)](https://sonarcloud.io/summary/new_code?id=Eksi-tech_php-project-45)
[![Technical Debt](https://sonarcloud.io/api/project_badges/measure?project=Eksi-tech_php-project-45&metric=sqale_index)](https://sonarcloud.io/summary/new_code?id=Eksi-tech_php-project-45)
[![Maintainability Rating](https://sonarcloud.io/api/project_badges/measure?project=Eksi-tech_php-project-45&metric=sqale_rating)](https://sonarcloud.io/summary/new_code?id=Eksi-tech_php-project-45)
[![Vulnerabilities](https://sonarcloud.io/api/project_badges/measure?project=Eksi-tech_php-project-45&metric=vulnerabilities)](https://sonarcloud.io/summary/new_code?id=Eksi-tech_php-project-45)

**Brain Games**

Набор из 5 консольных игр, построенных на арифметике и логике, написанных на PHP.

**Доступные игры**
1. Brain Even - Проверка на чётность
   Определите, является ли случайное число чётным. 

Команда: make brain-even
Демонстрация - https://asciinema.org/a/PZIB0AMPHDWAigwTO2UAGq9PI

2. Brain Calc - Калькулятор
   Решите простое арифметическое выражение. 

Команда: make brain-calc
Демонстрация - https://asciinema.org/a/5gDhJ6Taqf9GAgZvAtUY4W16l

3. Brain GCD - Наибольший общий делитель 
   Найдите Наибольший общий делитель двух случайных чисел. 

Команда: make brain-gcd
Демонстрация - https://asciinema.org/a/bBiNGAePf6ZXq4p0odlB5zFD6



4. Brain Progression - Арифметическая прогрессия
   Найдите пропущенный элемент в прогрессии.

Команда: make brain-progression
Демонстрация - https://asciinema.org/a/HawCHRR9MDuvTWbaOEE4d76Zh

5. Brain Prime - Простое число
   Определите, является ли число простым.

Команда: make brain-prime
Демонстрация - https://asciinema.org/a/JuOx3oZ2UACiALbcsQ5da10V2

**Требования**
- PHP 8.0 или выше
- Composer
- Unix-подобная система (Linux, WSL, macOS)

**Установка**

# Клонирование репозитория
git clone https://github.com/Eksi-tech/php-project-45.git
cd php-project-45

# Установка зависимостей
make install

# Запуск любой из игр
make brain-even

**Альтернативный запуск**

# Прямой запуск через бинарники
./bin/brain-even
./bin/brain-calc
./bin/brain-gcd
./bin/brain-progression
./bin/brain-prime

**Проверка кода**

# Запуск линтера
make lint

# Проверка валидности composer.json
make validate

**Структура проекта**

php-project-45/
├── bin/                 # Исполняемые файлы игр
├── src/
│   ├── Engine.php      # Общая игровая логика
│   └── Games/          # Логика отдельных игр
├── Makefile            # Команды управления
└── composer.json       # Конфигурация зависимостей

**Правила игр**
Каждая игра состоит из 3 раундов
Для победы нужно правильно ответить на все вопросы
При неправильном ответе игра завершается

**Особенности реализации**
- Чистый PHP без фреймворков
- Консольный интерфейс через wp-cli/php-cli-tools
- Автоматическая проверка кода стандартом PSR-12
- Кросс-платформенная совместимость

**Технические детали**
- Все игры проходят статический анализ в SonarCloud
- Код соответствует стандартам PSR-12
- Используются только безопасные генераторы случайных чисел
- Поддержка Unicode и кириллицы

**Разработано в рамках обучения на Hexlet**