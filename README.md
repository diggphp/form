# 表单生成器

生成bootstrap样式的表单

## 安装

``` bash
composer require diggphp/form
```

## 用例

``` php
use DiggPHP\Form\Builder;
use DiggPHP\Form\Col;
use DiggPHP\Form\Row;
use DiggPHP\Form\Field\Checkbox;
use DiggPHP\Form\Field\Code;
use DiggPHP\Form\Field\Cover;
use DiggPHP\Form\Field\Files;
use DiggPHP\Form\Field\Input;
use DiggPHP\Form\Field\Pics;
use DiggPHP\Form\Field\Radio;
use DiggPHP\Form\Field\Select;
use DiggPHP\Form\Field\SimpleMDE;
use DiggPHP\Form\Field\Summernote;
use DiggPHP\Form\Field\Switchs;
use DiggPHP\Form\Field\Textarea;

$builder = new Builder('表单');
$builder->addItem(
    new Row(
        (new Col('col-md-3'))->addItem(
            (new Input('单行文本', '字段1', '默认值')),
            (new Select('下拉选择', '字段2', '默认值'))->set('items', ['选项一', '选项二']),
            (new Checkbox('多选框', '字段3', ['选中值']))->set('items', ['选中值', '可选值2']),
            (new Radio('单选', '字段4', '选中值'))->set('items', ['选中值', '可选值2', '可选值3']),
            (new SimpleMDE('Markdown编辑器', '字段5', '# 我是标题')),
            (new Summernote('富文本编辑器', '字段6', '我是默认值')),
            (new Textarea('多行文本', '字段7', '我是多行文本默认值'))
        ),
        (new Col('col-md-9'))->addItem(
            (new Code('代码编辑框', 'codex', '我是值')),
            (new Cover('单图上传', 'cover', 'http://....jpg')),
            (new Files('多文件上传', 'asdfas', [])),
            (new Pics('多图片上传', 'asdfas', [])),
            (new Switchs('选项切换', 'switch', 'dww'))->addSwitch('kkj', 'sd', 'adfsdf')->addSwitch('sdfsdf', 'dww', 'asdf')
        ),
    ),
    new Input('另一个单行文本', 'FES', 'DFS')
);

echo $builder;
```

## 示例图

![image](https://user-images.githubusercontent.com/96121255/146198910-3ad819bb-8920-48f9-9902-386b92e44b2f.png)
