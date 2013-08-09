import requests

def main():
    r = requests.get("https://meta.orain.org/w/index.php?title=Database_list&action=raw")

    if r.status_code != 200:
        return

    text = r.text.replace('<pre>\n', '').replace('</pre>', '')

    if text[-1:] == "\n":
        text = text[:-1]

    with open("/usr/share/nginx/.orain.org/w/all.dblist", "w") as db_list:
        db_list.write(text)

if __name__ == "__main__":
    main()
