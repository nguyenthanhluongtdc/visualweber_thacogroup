import styled from 'vue-styled-components';

const ContainerCustom = styled.div`
    padding-left: 11.6%;
    padding-right: 11.6%;

    @media (max-width: 1680px) {
        padding-left: 8%;
        padding-right: 8%;
    }

    @media (max-width: 992px) {
        padding-left: 6%;
        padding-right: 6%;
    }

    @media (max-width: 768px) {
        padding-left: 15px;
        padding-right: 15px;
    }

    .__title {
        font-family: "MyriadPro-Bold";
        text-transform: uppercase;
        color: #00529e;
        margin-bottom: 0;
        margin-left: 10px;
    }
`;

const TitleSectionMedia = styled.div`
    display: flex;
    align-items: center;
`;

const HeaderSectionMedia = styled.div`
    margin-top: 25px;
    margin-bottom: 30px;
`;

const SectionMedia = styled.div`

`;

const SectionMain = styled.div`
    .theme--light.v-breadcrumbs {
        padding: 25px 0;

        .v-breadcrumbs__item{
            color: #262626;
            opacity: 70%;
            font-family: "MyriadPro-Bold";
            font-size: initial;

            &--disabled {
                color: black;
                opacity: 1;
            }
        }
    }

    .v-btn-toggle {

        .v-icon {
            margin-right: 5px;
        }
        .v-btn{
            border: none !important;
            outline: none !important;
            border-radius: none !important;
        }
    }

    .v-btn-toggle:not(.v-btn-toggle--group) .v-btn.v-btn.v-btn--active {
        border: 1px solid #0f4685 !important;
        background-color: transparent;
        pointer-events: none;
    }

    .tabs-content {
        .info-item{
            padding: 15px;
        }

        .album-item {
            position: relative;
            background: #f1f1f1;
            height: 100%;

            &__name {
                margin-bottom: 5px;
                font-family: "MyriadPro-Bold";
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 2;
            }
            
            &__date {
                color: #bcbcbc;
                display: block;
            }

            &__count {
                position: absolute;
                padding: 5px;
                color: #fff;
                background: rgba(0,0,0,.3);
                top: 20px;
                z-index: 2;
                display: flex;
                left: 20px;
                align-items: center;

                i {
                    width: 18px;
                    height: 18px;
                    font-size: 18px;
                }

                .quantity {
                    margin-bottom: -5px;
                    margin-left: 10px;
                }
            }

            &__download {
                position: absolute;
                padding: 5px;
                color: #fff;
                background: rgba(0,0,0,.3);
                top: 20px;
                z-index: 2;
                right: 20px;
            }

            &__back {
                position: absolute;
                padding: 5px;
                color: #fff;
                background: rgba(0,0,0,.3);
                top: 20px;
                z-index: 2;
                display: flex;
                left: 20px;
                align-items: center;
                cursor: pointer;

                i{
                    width: 18px;
                    height: 18px;
                    font-size: 18px;
                }

                .text{
                    margin-bottom: -5px;
                    margin-left: 10px;
                }
            }

            &:hover {
                color: #0f4685;
                box-shadow: 0 7px 10px 1px #3333;
                transition: all .3s;
                cursor: pointer;
            }
        }
        .album-item img {
            max-width: 100%;
        }
    }

    .v-pagination {
        margin-top: 40px;
        margin-bottom: 40px;
    }
`;

const SectionVideo = styled.div`

`;

const ModalDialog = styled.div`
    padding: 40px;
    background-color: #f1f1f1;
    .list-image {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 3.3% 2%;
    }
`;

const SectionFixed = styled.div`
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgb(0, 0, 0, 0.3);

    .v-progress-circular {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index :1000;
    }
`;

export {TitleSectionMedia, HeaderSectionMedia, ContainerCustom, SectionMedia, SectionVideo, SectionMain, ModalDialog, SectionFixed};