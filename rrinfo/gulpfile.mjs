import gulp from 'gulp';
import yargs from 'yargs';
import { hideBin } from 'yargs/helpers'
import less from 'gulp-less'
import cleanCSS from 'gulp-clean-css'
import gulpif from 'gulp-if'
import sourcemaps from 'gulp-sourcemaps'

const PRODUCTION = yargs(hideBin(process.argv)).argv.prod;

const paths = {
    styles: {
        src: ['src/assets/less/bundle.less', 'src/assets/less/admin.less'],
        dest: 'dist/assets/css'
    }
}

export const style = () => {
    return gulp.src(paths.styles.src)
    .pipe(gulpif(!PRODUCTION, sourcemaps.init()))
    .pipe(less())
    .pipe(gulpif(PRODUCTION, cleanCSS({compatibility: 'ie8'})))
    .pipe(gulpif(!PRODUCTION, sourcemaps.write()))
    .pipe(gulp.dest(paths.styles.dest))
}

export const watch = () => {
    gulp.watch('src/assets/less/**/*.less', style)
}

export default style;