@extends('frontend.beranda.layouts.app')

@section('container')
<style>
    .magicpattern {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center center;
        background-repeat: repeat;
        /* Create the parallax scrolling effect */
        background-attachment: fixed;

        background-image: url("data:image/svg+xml;utf8,%3Csvg viewBox=%220 0 1500 1100%22 xmlns=%22http:%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cmask id=%22b%22 x=%220%22 y=%220%22 width=%221500%22 height=%221100%22%3E%3Cpath fill=%22url(%23a)%22 d=%22M0 0h1500v1100H0z%22%2F%3E%3C%2Fmask%3E%3Cpath fill=%22%23000336%22 d=%22M0 0h1500v1100H0z%22%2F%3E%3Cg style=%22transform-origin:center center%22 stroke=%22%234c4e72%22 stroke-width=%221.5%22 mask=%22url(%23b)%22%3E%3Cpath fill=%22none%22 d=%22M0 0h75v75H0z%22%2F%3E%3Cpath fill=%22%234c4e72a5%22 d=%22M75 0h75v75H75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M150 0h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e729a%22 d=%22M225 0h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M300 0h75v75h-75zM375 0h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e7224%22 d=%22M450 0h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M525 0h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e723f%22 d=%22M600 0h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M675 0h75v75h-75zM750 0h75v75h-75zM825 0h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e722f%22 d=%22M900 0h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M975 0h75v75h-75zM1050 0h75v75h-75zM1125 0h75v75h-75zM1200 0h75v75h-75zM1275 0h75v75h-75zM1350 0h75v75h-75zM1425 0h75v75h-75zM0 75h75v75H0zM75 75h75v75H75zM150 75h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e7254%22 d=%22M225 75h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M300 75h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e723d%22 d=%22M375 75h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M450 75h75v75h-75zM525 75h75v75h-75zM600 75h75v75h-75zM675 75h75v75h-75zM750 75h75v75h-75zM825 75h75v75h-75zM900 75h75v75h-75zM975 75h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e720e%22 d=%22M1050 75h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M1125 75h75v75h-75zM1200 75h75v75h-75zM1275 75h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e72cd%22 d=%22M1350 75h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e7257%22 d=%22M1425 75h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e72b8%22 d=%22M0 150h75v75H0z%22%2F%3E%3Cpath fill=%22%234c4e7260%22 d=%22M75 150h75v75H75z%22%2F%3E%3Cpath fill=%22%234c4e7287%22 d=%22M150 150h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e72d2%22 d=%22M225 150h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M300 150h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e729a%22 d=%22M375 150h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e72e1%22 d=%22M450 150h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e722a%22 d=%22M525 150h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M600 150h75v75h-75zM675 150h75v75h-75zM750 150h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e7206%22 d=%22M825 150h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M900 150h75v75h-75zM975 150h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e72d5%22 d=%22M1050 150h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e72c4%22 d=%22M1125 150h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M1200 150h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e727c%22 d=%22M1275 150h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e720b%22 d=%22M1350 150h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e72b1%22 d=%22M1425 150h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M0 225h75v75H0zM75 225h75v75H75zM150 225h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e72e8%22 d=%22M225 225h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e7212%22 d=%22M300 225h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M375 225h75v75h-75zM450 225h75v75h-75zM525 225h75v75h-75zM600 225h75v75h-75zM675 225h75v75h-75zM750 225h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e72b1%22 d=%22M825 225h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M900 225h75v75h-75zM975 225h75v75h-75zM1050 225h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e7295%22 d=%22M1125 225h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M1200 225h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e722f%22 d=%22M1275 225h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M1350 225h75v75h-75zM1425 225h75v75h-75zM0 300h75v75H0zM75 300h75v75H75z%22%2F%3E%3Cpath fill=%22%234c4e729a%22 d=%22M150 300h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M225 300h75v75h-75zM300 300h75v75h-75zM375 300h75v75h-75zM450 300h75v75h-75zM525 300h75v75h-75zM600 300h75v75h-75zM675 300h75v75h-75zM750 300h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e7205%22 d=%22M825 300h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M900 300h75v75h-75zM975 300h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e72ce%22 d=%22M1050 300h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e7214%22 d=%22M1125 300h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M1200 300h75v75h-75zM1275 300h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e727d%22 d=%22M1350 300h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M1425 300h75v75h-75zM0 375h75v75H0zM75 375h75v75H75z%22%2F%3E%3Cpath fill=%22%234c4e7223%22 d=%22M150 375h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M225 375h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e72db%22 d=%22M300 375h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M375 375h75v75h-75zM450 375h75v75h-75zM525 375h75v75h-75zM600 375h75v75h-75zM675 375h75v75h-75zM750 375h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e72c0%22 d=%22M825 375h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e720a%22 d=%22M900 375h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M975 375h75v75h-75zM1050 375h75v75h-75zM1125 375h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e729b%22 d=%22M1200 375h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M1275 375h75v75h-75zM1350 375h75v75h-75zM1425 375h75v75h-75zM0 450h75v75H0zM75 450h75v75H75zM150 450h75v75h-75zM225 450h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e72b4%22 d=%22M300 450h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e72fd%22 d=%22M375 450h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e7225%22 d=%22M450 450h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M525 450h75v75h-75zM600 450h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e72f1%22 d=%22M675 450h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e7264%22 d=%22M750 450h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M825 450h75v75h-75zM900 450h75v75h-75zM975 450h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e729b%22 d=%22M1050 450h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M1125 450h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e724e%22 d=%22M1200 450h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M1275 450h75v75h-75zM1350 450h75v75h-75zM1425 450h75v75h-75zM0 525h75v75H0z%22%2F%3E%3Cpath fill=%22%234c4e726f%22 d=%22M75 525h75v75H75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M150 525h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e72b4%22 d=%22M225 525h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M300 525h75v75h-75zM375 525h75v75h-75zM450 525h75v75h-75zM525 525h75v75h-75zM600 525h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e72e0%22 d=%22M675 525h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M750 525h75v75h-75zM825 525h75v75h-75zM900 525h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e72ab%22 d=%22M975 525h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M1050 525h75v75h-75zM1125 525h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e7272%22 d=%22M1200 525h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M1275 525h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e72e6%22 d=%22M1350 525h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e72c1%22 d=%22M1425 525h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M0 600h75v75H0zM75 600h75v75H75zM150 600h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e72a8%22 d=%22M225 600h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e7264%22 d=%22M300 600h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M375 600h75v75h-75zM450 600h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e7258%22 d=%22M525 600h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M600 600h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e726b%22 d=%22M675 600h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M750 600h75v75h-75zM825 600h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e7219%22 d=%22M900 600h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M975 600h75v75h-75zM1050 600h75v75h-75zM1125 600h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e72cb%22 d=%22M1200 600h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e7275%22 d=%22M1275 600h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M1350 600h75v75h-75zM1425 600h75v75h-75zM0 675h75v75H0zM75 675h75v75H75zM150 675h75v75h-75zM225 675h75v75h-75zM300 675h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e7218%22 d=%22M375 675h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M450 675h75v75h-75zM525 675h75v75h-75zM600 675h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e72f5%22 d=%22M675 675h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e7218%22 d=%22M750 675h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e72a0%22 d=%22M825 675h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M900 675h75v75h-75zM975 675h75v75h-75zM1050 675h75v75h-75zM1125 675h75v75h-75zM1200 675h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e72a2%22 d=%22M1275 675h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M1350 675h75v75h-75zM1425 675h75v75h-75zM0 750h75v75H0zM75 750h75v75H75z%22%2F%3E%3Cpath fill=%22%234c4e7293%22 d=%22M150 750h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M225 750h75v75h-75zM300 750h75v75h-75zM375 750h75v75h-75zM450 750h75v75h-75zM525 750h75v75h-75zM600 750h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e725c%22 d=%22M675 750h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M750 750h75v75h-75zM825 750h75v75h-75zM900 750h75v75h-75zM975 750h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e7259%22 d=%22M1050 750h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M1125 750h75v75h-75zM1200 750h75v75h-75zM1275 750h75v75h-75zM1350 750h75v75h-75zM1425 750h75v75h-75zM0 825h75v75H0zM75 825h75v75H75zM150 825h75v75h-75zM225 825h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e7203%22 d=%22M300 825h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M375 825h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e7223%22 d=%22M450 825h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M525 825h75v75h-75zM600 825h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e7266%22 d=%22M675 825h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M750 825h75v75h-75zM825 825h75v75h-75zM900 825h75v75h-75zM975 825h75v75h-75zM1050 825h75v75h-75zM1125 825h75v75h-75zM1200 825h75v75h-75zM1275 825h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e7236%22 d=%22M1350 825h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e729a%22 d=%22M1425 825h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M0 900h75v75H0zM75 900h75v75H75zM150 900h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e720e%22 d=%22M225 900h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M300 900h75v75h-75zM375 900h75v75h-75zM450 900h75v75h-75zM525 900h75v75h-75zM600 900h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e7209%22 d=%22M675 900h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M750 900h75v75h-75zM825 900h75v75h-75zM900 900h75v75h-75zM975 900h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e72bc%22 d=%22M1050 900h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M1125 900h75v75h-75zM1200 900h75v75h-75zM1275 900h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e7215%22 d=%22M1350 900h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M1425 900h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e728a%22 d=%22M0 975h75v75H0z%22%2F%3E%3Cpath fill=%22none%22 d=%22M75 975h75v75H75zM150 975h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e726a%22 d=%22M225 975h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M300 975h75v75h-75zM375 975h75v75h-75zM450 975h75v75h-75zM525 975h75v75h-75zM600 975h75v75h-75zM675 975h75v75h-75zM750 975h75v75h-75zM825 975h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e72cb%22 d=%22M900 975h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M975 975h75v75h-75zM1050 975h75v75h-75zM1125 975h75v75h-75zM1200 975h75v75h-75zM1275 975h75v75h-75zM1350 975h75v75h-75zM1425 975h75v75h-75zM0 1050h75v75H0zM75 1050h75v75H75zM150 1050h75v75h-75zM225 1050h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e72be%22 d=%22M300 1050h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M375 1050h75v75h-75zM450 1050h75v75h-75zM525 1050h75v75h-75zM600 1050h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e729b%22 d=%22M675 1050h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M750 1050h75v75h-75zM825 1050h75v75h-75zM900 1050h75v75h-75zM975 1050h75v75h-75zM1050 1050h75v75h-75zM1125 1050h75v75h-75zM1200 1050h75v75h-75zM1275 1050h75v75h-75z%22%2F%3E%3Cpath fill=%22%234c4e72f6%22 d=%22M1350 1050h75v75h-75z%22%2F%3E%3Cpath fill=%22none%22 d=%22M1425 1050h75v75h-75z%22%2F%3E%3C%2Fg%3E%3Cdefs%3E%3CradialGradient id=%22a%22%3E%3Cstop offset=%220%22 stop-color=%22%23fff%22%2F%3E%3Cstop offset=%221%22 stop-color=%22%23fff%22 stop-opacity=%220%22%2F%3E%3C%2FradialGradient%3E%3C%2Fdefs%3E%3C%2Fsvg%3E");
    }
</style>
<style>
    /* If the screen size is 1200px wide or more, set the font-size to 80px */
    @media (min-width: 1200px) {
        .responsive-header {
            font-size: 64px;
        }

        .responsive-header1 {
            font-size: 50px;
        }

        .responsive-p {
            font-size: 24px;
        }

        .responsive-p1 {
            font-size: 22px;
        }

        .responsive-mini {
            font-size: 20px
        }

        .responsive-small {
            font-size: 16px
        }
    }

    /* If the screen size is smaller than 1200px, set the font-size to 80px */
    @media (max-width: 1199.98px) {
        .responsive-header {
            font-size: 40px;
        }

        .responsive-header1 {
            font-size: 30px;
        }

        .responsive-p {
            font-size: 16px;
        }

        .responsive-p1 {
            font-size: 14px;
        }

        .responsive-mini {
            font-size: 14px
        }
    }
</style>
<style>
    /* Typewriter effect 1 */
    @keyframes typing {

        0%,
        1% {
            content: "";
        }

        1%,
        2% {
            content: "S";
        }

        2%,
        3% {
            content: "Se";
        }

        3%,
        4% {
            content: "Sel";
        }

        4%,
        5% {
            content: "Sela";
        }

        5%,
        6% {
            content: "Selam";
        }

        6%,
        7% {
            content: "Selamat";
        }

        7%,
        8% {
            content: "Selamat Da";
        }

        8%,
        9% {
            content: "Selamat Data";
        }

        10%,
        25% {
            content: "Selamat Datang";
        }

        52%,
        55% {
            content: "";
        }

        56%,
        57% {
            content: "W";
        }

        58%,
        59% {
            content: "Wi";
        }

        60%,
        61% {
            content: "Win";
        }

        62%,
        63% {
            content: "Winni";
        }

        64%,
        65% {
            content: "Winnic";
        }

        66%,
        67% {
            content: "Winnico";
        }

        68%,
        69% {
            content: "Winnicod";
        }

        70%,
        71% {
            content: "Winnicode";
        }

        72%,
        73% {
            content: "Winnicode Garuda";
        }

        74%,
        75% {
            content: "Winnicode Garuda Tek";
        }

        76%,
        77% {
            content: "Winnicode Garuda Tekno";
        }

        78%,
        79% {
            content: "Winnicode Garuda Teknolo";
        }

        80%,
        100% {
            content: "Winnicode Garuda Teknologi";
        }
    }

    @keyframes blink {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }
    }

    .typewriter {
        --caret: currentcolor;
    }

    .typewriter::before {
        content: "";
        animation: typing 13.5s infinite;
    }

    .typewriter::after {
        content: "";
        border-right: 1px solid var(--caret);
        animation: blink 0.5s linear infinite;
    }

    .typewriter.thick::after {
        border-right: 1ch solid var(--caret);
    }

    .typewriter.nocaret::after {
        border-right: 0;
    }


    @media (prefers-reduced-motion) {
        .typewriter::after {
            animation: none;
        }

        @keyframes sequencePopup {

            0%,
            100% {
                content: "Selamat Datang!";
            }

            25% {
                content: "Winnicode Garuda Teknologi";
            }

            50% {
                content: "reader";
            }

            75% {
                content: "human";
            }
        }

        .typewriter::before {
            content: "Selamat Datang!";
            animation: sequencePopup 12s linear infinite;
        }
    }
</style>
<section class="magicpattern test py-4 py-xl-5" style="height: 750px;">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-md-10 col-xl-11 text-center d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center">
                <div>
                    <h5 class="fw-semibold mb-3 responsive-mini" style="color: rgb(255,255,255);">Winnicode Garuda Teknologi
                    </h5>
                    <h3 class="fw-bolder mb-3 responsive-header typewriter thick" style="text-align: center;color: rgb(255,255,255);">

                    </h3>
                    <p class="fw-semibold mb-4 responsive-p" style="color: rgb(255,255,255);">"Portal Jurnalistik dan berita Untuk sistem layanan terpadu."
                    </p>
                    <a href="/login" class="btn btn-warning btn-lg fs-5 fw-semibold rounded-pill shadow-sm me-2 py-2 px-4" type="button" style="width: 166.475px;height: 45.375px;" data-bss-hover-animate="tada">Masuk
                        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M13 2C10.2386 2 8 4.23858 8 7C8 7.55228 8.44772 8 9 8C9.55228 8 10 7.55228 10 7C10 5.34315 11.3431 4 13 4H17C18.6569 4 20 5.34315 20 7V17C20 18.6569 18.6569 20 17 20H13C11.3431 20 10 18.6569 10 17C10 16.4477 9.55228 16 9 16C8.44772 16 8 16.4477 8 17C8 19.7614 10.2386 22 13 22H17C19.7614 22 22 19.7614 22 17V7C22 4.23858 19.7614 2 17 2H13Z" fill="#000000"></path>
                                <path d="M3 11C2.44772 11 2 11.4477 2 12C2 12.5523 2.44772 13 3 13H11.2821C11.1931 13.1098 11.1078 13.2163 11.0271 13.318C10.7816 13.6277 10.5738 13.8996 10.427 14.0945C10.3536 14.1921 10.2952 14.2705 10.255 14.3251L10.2084 14.3884L10.1959 14.4055L10.1915 14.4115C10.1914 14.4116 10.191 14.4122 11 15L10.1915 14.4115C9.86687 14.8583 9.96541 15.4844 10.4122 15.809C10.859 16.1336 11.4843 16.0346 11.809 15.5879L11.8118 15.584L11.822 15.57L11.8638 15.5132C11.9007 15.4632 11.9553 15.3897 12.0247 15.2975C12.1637 15.113 12.3612 14.8546 12.5942 14.5606C13.0655 13.9663 13.6623 13.2519 14.2071 12.7071L14.9142 12L14.2071 11.2929C13.6623 10.7481 13.0655 10.0337 12.5942 9.43937C12.3612 9.14542 12.1637 8.88702 12.0247 8.7025C11.9553 8.61033 11.9007 8.53682 11.8638 8.48679L11.822 8.43002L11.8118 8.41602L11.8095 8.41281C11.4848 7.96606 10.859 7.86637 10.4122 8.19098C9.96541 8.51561 9.86636 9.14098 10.191 9.58778L11 9C10.191 9.58778 10.1909 9.58773 10.191 9.58778L10.1925 9.58985L10.1959 9.59454L10.2084 9.61162L10.255 9.67492C10.2952 9.72946 10.3536 9.80795 10.427 9.90549C10.5738 10.1004 10.7816 10.3723 11.0271 10.682C11.1078 10.7837 11.1931 10.8902 11.2821 11H3Z" fill="#000000"></path>
                            </g>
                        </svg></a>
                </div>
            </div>
        </div>
    </div>
</section>
@include('frontend.modal-utama.wa')
@endsection