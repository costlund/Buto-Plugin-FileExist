# Buto-Plugin-FileExist
Render element depending of a file exist or not.

## Usage
```
type: widget
data:
  plugin: 'file/exist'
  method: render_element
  data:
    filename: /../buto_data/theme/[theme]/data.yml
    if_exist:
      -
        type: p
        innerHTML: File exist.
    if_not_exist:
      -
        type: p
        innerHTML: File does not exist.
```
