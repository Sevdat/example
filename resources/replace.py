def replace_text_in_html_file(html_file_path, search_text, replace_text):
    # открываем файл и считываем его содержимое в строку
    with open(html_file_path, 'r') as file:
        html = file.read()

    # заменяем все вхождения искомого текста на новый текст
    html = html.replace(search_text, replace_text)

    # записываем измененный HTML обратно в файл
    with open(html_file_path, 'w') as file:
        file.write(html)
href= 'C:/OSPanel/domains/example/resources/views/home/'
filesNames = ["index","profile","basic-table","fontawesome","map-google","blank","404"]
files = list(map(lambda file :href + file + ".blade.php", filesNames))
for file in files:
    endings = [".png",".jpg",".css",".js",".less"]
    for end in endings:
        replace_text_in_html_file(file, end +"\"", end + '\') }'+'}'+"\"")
    starts = ["bootstrap","css","plugins","js","less"]
    for st in starts:
        replace_text_in_html_file(file, "\"" + st, "\"" + "{"+"{ asset('static/" +st)
    #изменение ссылок:
    replace_text_in_html_file(file, "index.html", "/")

    for filesName in filesNames:
        replace_text_in_html_file(file, filesName + ".html", "/"+filesName)
        replace_text_in_html_file(file, "///", "/")
#При изменении путей:
#old ="plugins"
#new = "static/plugins"
#replace_text_in_html_file(file, "'" + old, "'" + new)

