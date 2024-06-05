<div align = center>

<img src="https://cdn-gulli.jnsmedia.fr/var/jeunesse/storage/images/gulli/chaine-tv/dessins-animes/pokemon/images/la-star-rondoudou/28668785-1-fre-FR/La-star-Rondoudou.jpg" width="1080" height="" >

# **Fukashitapi** 
### Vos rêves valent le coup d'être diffusé
![Symfony](https://img.shields.io/badge/symfony-7.0.7-green)
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
    Commentary "1" <-- "n" Profil : Emit


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
        #profil
    }
    
    class Follow{
        #_follower_ BIGINT
        #_followed_ BIGINT
    }

    Post  <--  Commentary 
    Post  -->  Profil
    Tags  -->  Tagging 
    Profil  <--  Follow
    Profil <-- Follow
    Post --> Tagging
    Commentary --> Profil

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
<img src="https://codefirst.iut.uca.fr/git/avatars/e617cf1cc0d6e769f4dc33604f04525b?size=870" width="50" >
</a>

<a href = "https://codefirst.iut.uca.fr/git/remi.arnal">
<img src="https://codefirst.iut.uca.fr/git/avatars/c13b7679488b8dcdf7d551b52f579bcd?size=870" width="50" >
</a>

<a href = "https://codefirst.iut.uca.fr/git/dorian.hodin">
<img src="https://codefirst.iut.uca.fr/git/avatars/1987ef0b5b65f4d208cb3250a24b4794?size=870" width="50" >
</a>

</div>

</div>
