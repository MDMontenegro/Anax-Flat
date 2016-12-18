---
views:
    flash:
        region: flash
        template: default/content
        data:
            meta:
                type: content
                route: block/flash-empty
                class: "flash-img"
           
    main:
        template: default/article
        data:
            class: blog

    byline: false
    share-this: false
    block-about: false
    article-toc: false

    blog-list:
        region: main
        template: default/blog-list
        sort: 2
        data:
            dateFormat: j F Y
            meta: 
                type: toc
                items: 10

    blog-toc:
        region: sidebar-right
        template: default/blog-toc
        sort: 2
        data:
            meta: 
                type: copy
                view: blog-list

...

## Min bild blogg

Här presenterar jag dagens bild tillsammans med en kortare beskrivning om hur det gick 
till när bilden togs.