# Syntax highlighter for BatFlat

Simple module based at [Prism.js](https://prismjs.com/)

## Version
1.1.0

## Requirements
Batflat 1.3.x

## Changelog
### 1.1.0
- Optimalize site init.
### 1.1.1
- Add support for Markup.

## How to install
1. Download this repository
2. Unzip the downloaded files
3. Move catalog with theme to the `/inc/modules` 
4. Activate form modules admin panel

## Supported languages
The module contains the full version of Prism, but supports only the following languages:
- CSS
- JavaScript
- Arduino
- AutoIt
- Bash
- C
- Cpp
- Csharp
- AspNet
- Lua
- Makefile
- Markdown
- Less
- Json
- Latex
- Java
- Ini
- Http
- Git
- PowerShell
- Python
- Sass
- Scss
- Sql
- TypeScript
- Yaml
- Php
- Batch
- VisualBasic
- Verilog
- Vhdl

## Usage
To format a block of code, place it between the `{$prismjs.start.LN}` and `{$prismjs.end}` tags, where LN stands for the language name in lowercase letters.

### Examples
`{$prismjs.start.css} p { color : red; } {$prismjs.end}`

`{$prismjs.start.javascript} alert('OK'); {$prismjs.end}`

## Configuration

### Select theme
In the administration panel, select the PrismJs module from the main menu. Then select one of the available themes and confirm with the "Choose" button.