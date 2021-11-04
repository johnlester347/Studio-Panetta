
.section-studio-gallery {
    padding: 25px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 20px;
    align-items: center;
    justify-items: center;
    padding-top: 120px;
    @media screen and (max-width: 768px) {
        grid-template-columns: 1fr;
        // grid-template-rows: repeat(9, 520px);
    }
}

.gallery {
    position: relative;
    height: 100%;
    width: 100%;
    display: grid;
    align-items: center;
    justify-items: center;
    overflow: hidden;
    @media screen and (max-width: 1024px) {
        height: 320px;
    }
    @media screen and (max-width: 768px) {
        max-width: 100%;
        max-height: 100%;
    }
    &__img {
        display: block;
        width: 329px;
        height: 379px;
        @media screen and (max-width: 1024px) {
            width: 229px;
            height: 279px;
        }
        @media screen and (max-width: 768px) {
            // max-width: 100%;
            width: 100%;
        }
    }
    &__animate1:hover {
        background-image: url(../images/photography/a_gladstone_st/gladstone-st_03.jpg);
        background-size: cover;
        background-position: center;
        opacity: 1;
        // & .gallery__img {
        //     opacity: 0;
        // }
    }
    &__animate1 {
        opacity: 0;
        transition: opacity 1s;
    }
    &__animate2:hover {
        background-image: url(../images/photography/a_gladstone_st/gladstone-st_03.jpg);
        background-size: cover;
        background-position: center;
        opacity: 1;
        transition: 0.3s ease-in-out;
        & .gallery__img {
            opacity: 0;
        }
    }
    &__text {
        display: grid;
        align-content: center;
        justify-content: center;
        width: 100%;
        position: absolute;
        transform: translateY(-400%);
        color: #ffffff;
        opacity: 0;
        // opacity: 0;
        // display: none;
        // margin-bottom: 30rem;
    }
    &__box {
        position: relative;
    }
    &__card {
        top: 0;
        left: 0;
        height: 520px;
        width: 100%;
        position: absolute;
    }
}
-----------------------------
.section-studio-gallery {
    padding: 25px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 20px;
    align-items: center;
    justify-items: center;
    @media screen and (max-width: 768px) {
        grid-template-columns: 1fr;
        // grid-template-rows: repeat(9, 520px);
    }
}

.gallery {
    height: 520px;
    width: 100%;
    display: grid;
    align-items: center;
    justify-items: center;
    @media screen and (max-width: 1024px) {
        height: 320px;
    }
    @media screen and (max-width: 768px) {
        max-width: 100%;
        max-height: 100%;
    }
    &__img {
        display: block;
        width: 329px;
        height: 379px;
        @media screen and (max-width: 1024px) {
            width: 229px;
            height: 279px;
        }
        @media screen and (max-width: 768px) {
            // max-width: 100%;
            width: 100%;
        }
    }
    &__animate1:hover {
        background-image: url(../images/photography/a_gladstone_st/gladstone-st_03.jpg);
        background-size: cover;
        background-position: center;
        // transition: 0.3s ease-in-out;
        opacity: 1;
        & .gallery__img {
            opacity: 0;
        }
    }
    &__animate2:hover {
        background-image: url(/assets/images/photography/a_gladstone_st/gladstone-st_03.jpg);
        background-size: cover;
        background-position: center;
        opacity: 1;
        transition: 0.3s ease-in-out;
        & .gallery__img {
            opacity: 0;
        }
    }
    &__text {
        display: grid;
        align-content: center;
        justify-content: center;
        width: 100%;
        position: absolute;
        bottom: 40px;
        color: #ffffff;
        // opacity: 0;
        // display: none;
        // margin-bottom: 30rem;
    }
    &__box {
        position: relative;
    }
}