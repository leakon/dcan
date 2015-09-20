    background-image: url(images/layers-2x.png);
    background-image: url(images/layers.png);

http://passets-ec.pinterest.com

cat * | grep 'url' | cut -d "'" -f 2 | sort | uniq | grep -v 'base64' | grep '/' | grep 'webapp' | awk '{printf("wget http://passets-ec.pinterest.com%s\n", $1)}' > images/wget.sh



cat bundle* | grep 'woff' | cut -d '"' -f 2 | cut -d '/' -f 5-99 | awk '{printf("wget http://passets-ec.pinterest.com/%s\n", $1)}'
wget http://passets-ec.pinterest.com/webapp/style/app/common/fonts/abril/bold/abril_bold_tt-webfont.9fd50b01.woff
wget http://passets-ec.pinterest.com/webapp/style/app/common/fonts/abril/italic/abril_italic_tt-webfont.2c989c0b.woff
wget http://passets-ec.pinterest.com/webapp/style/app/common/fonts/abril/regular/abril_regular_tt-webfont.0636839a.woff
wget http://passets-ec.pinterest.com/webapp/style/app/common/fonts/adelle/bold/adelle_bold_tt-webfont.279830a4.woff
wget http://passets-ec.pinterest.com/webapp/style/app/common/fonts/adelle/light/adelle_light_tt-webfont.72513ef2.woff
wget http://passets-ec.pinterest.com/webapp/style/app/common/fonts/adelle/regular/adelle_regular_tt-webfont.f56116dd.woff


