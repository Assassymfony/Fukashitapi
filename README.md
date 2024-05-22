<div align = center>

<img src="https://cdn-gulli.jnsmedia.fr/var/jeunesse/storage/images/gulli/chaine-tv/dessins-animes/pokemon/images/la-star-rondoudou/28668785-1-fre-FR/La-star-Rondoudou.jpg" width="1080" height="" >

# **Fukashitapi** 
### Vos rêves valent le coup d'être diffusé
![Symfony](https://img.shields.io/badge/symfony-5.3-green)
</div>


# Présentation

Cet API permet le stockage et la récupération des informations stockés pour le bon fonctionnement de votre forum préféré :
**Fukafukashita**

# Base De données 

## MCD : 
```mermaid
classDiagram
    class Post{
        _id_ BIGINT
        title TEXT
        text TEXT
        isDream BOOLEAN
        upVote INT
        downVote INT
    }

    class Profil{
        _id_ BIGINT
        name TEXT
        description TEXT
        password TEXT
    }

    class Tags{
        id BIGINT
        name TEXT
        color TEXT
    }

    class Commentary{
        _id_ BIGINT
        text TEXT
    }

    Post "1" <-- "n" Commentary : respond
    Post "n" <-- "1" Profil : publish
    Tags "n" --> "n" Post : Have
    Profil "n" -- "n" Profil : Follow 


```

## MLD : 

```mermaid
classDiagram
    class Post{
        _id_ BIGINT
        title TEXT
        text TEXT
        isDream BOOLEAN
        upVote INT
        downVote INT
        #profil
    }

    class Profil{
        _id_ BIGINT
        name TEXT
        description TEXT
        password TEXT
    }

    class Tagging{
        #_tag_ BIGINT
        #_post_ BIGINT
    }

    class Tags{
        _id_ BIGINT
        name TEXT
        color TEXT
    }

    class Commentary{
        _id_ BIGINT
        text TEXT
        #post
    }

    Post  <--  Commentary 
    Post  -->  Profil
    Tags  -->  Tagging 
    Profil  <--  Profil
    Post --> Tagging

```


# Développeurs 🧑‍💻

- Corentin RICHARD : corentin.richard@etu.uca.fr
- Rémi ARNAL : remi.arnal@etu.uca.fr
- Aurian JAULT : aurian.jault@etu.uca.fr
- Dorian HODIN : dorian.hodin@etu.uca.fr



<div align="center">
<a href = "https://codefirst.iut.uca.fr/git/corentin.richard">


<img src="https://codefirst.iut.uca.fr/git/avatars/37008ec8b164225fb699e2efac55a6e3?size=870" width="50" >
</a>

<a href = "https://codefirst.iut.uca.fr/git/aurian.jault">
<img src="https://codefirst.iut.uca.fr/git/avatars/d774f04d13eab2fbcdfcbfccb966108f?size=870" width="50" >
</a>

<a href = "https://codefirst.iut.uca.fr/git/remi.arnal">
<img src="https://codefirst.iut.uca.fr/git/avatars/c13b7679488b8dcdf7d551b52f579bcd?size=870" width="50" >
</a>

<a href = "https://codefirst.iut.uca.fr/git/dorian.hodin">
<img src="https://codefirst.iut.uca.fr/git/avatars/d6f97dbdf66352b0b66685e144aa1ee5?size=870" width="50" >
</a>

</div>
