/**
 * Created by roger on 15/12/8.
 */
$(function () {
    var id = $('#id').val();
    $.$ajax.get('/site/job-data/'+id, function (res) {
        console.log(res);
        for (var name in res) {
            switch (name) {
                case 'job_desc':
                    var job_desc = res[name].replace(/\n/g, '<br>');
                    $('#'+name).html(job_desc);
                    break;
                case 'job_requires':
                    var job_requires = res[name].replace(/\n/g, '<br>');
                    $('#'+name).html(job_requires);
                    break;
                default:
                    $('#'+name).text(res[name]);
            }
        }
    });
});