(function (window) {
  /* ----------------全局扩展方法---------------- */
  window._eval = function (data) {
    if (!_.isString(data) || data === '') {
      return data;
    } else {
      return window.eval('(' + data + ')');
    }
  }

  /* ----------------Array 对象扩展方法---------------- */

  Array.prototype.has = function (data) {
    if (_.isObject(data) && !_.isArray(data)) {
      return _.some(this, function (o) {
        return _.every(data, function (v, k) {
          return o[k] === v;
        });
      });
    } else {
      return !(this.indexOf(data) < 0);
    }
  }

  Array.prototype.at = function (data) {
    if (_.isObject(data) && !_.isArray(data)) {
      var idx = -1
      _.each(this, function (o, i) {
        var eq = true;
        for (var d in data) {
          if (o[d] !== data[d]) eq = false;
        }
        if (eq) idx = i;
      });
      return idx;
    } else {
      return _.isNumber(data) ? this[data] : -1;
    }
  }

  /* ----------------String 对象扩展方法---------------- */

  String.prototype.trim = function () {
    return this.replace(/^\s+/, '').replace(/\s+$/, '')
  }

  String.prototype.format = function () {
    var args = arguments;
    return this.toString().replace(/\{(\d+)\}/g, function (m, i) {
      return args[i];
    });
  }

  /* ----------------Number 对象扩展方法---------------- */

  function getDigitLength() {
    return _.max(_.map(arguments, function (num) {
      var d = num.toString().split('.')[1];
      return d ? d.length : 0;
    }));
  }

  Number.prototype.plus = function (num) {
    try {
      var digit = getDigitLength([this, num]);
      var base = Math.pow(10, digit);
      return (this * base + num * base) / base;
    } catch (e) {
      return this + num;
    }
  }

  Number.prototype.minus = function (num) {
    try {
      var digit = getDigitLength([this, num]);
      var base = Math.pow(10, digit);
      return (this * base - num * base) / base;
    } catch (e) {
      return this - num;
    }
  }

  Number.prototype.times = function (num) {
    try {
      var digit = getDigitLength([this, num]);
      var base = Math.pow(10, digit);
      return ((this * base) * (num * base)) / (base * base);
    } catch (e) {
      return this * num;
    }
  }

  Number.prototype.divs = function (num) {
    try {
      var digit = getDigitLength([this, num]);
      var base = Math.pow(10, digit);
      return (this * base) / (num * base);
    } catch (e) {
      return this / num;
    }
  }

  /* ----------------Date 对象扩展方法---------------- */

  Date.format = function (date, str) {
    if (typeof date === 'string') date = date.replace(/-/g, '/');
    var format = str || 'yyyy-mm-dd', date = new Date(date), year = '' + date.getFullYear(), month = '0' + (date.getMonth() + 1), day = '0' + date.getDate();
    if (format.match(/(y+)/g)) format = format.replace(RegExp.$1, year.substr(0 - RegExp.$1.length));
    if (format.match(/(m+)/g)) format = format.replace(RegExp.$1, month.substr(0 - RegExp.$1.length));
    if (format.match(/(d+)/g)) format = format.replace(RegExp.$1, day.substr(0 - RegExp.$1.length));
    return format;
  }

  Date.prototype.format = function (str) {
    return Date.format(this, str);
  }

  Date.translate = function (str, tday) {
    if (str.indexOf('now') < 0) return str;
    var dateAdded = 0, today = tday ? new Date(tday) : new Date;
    if (str === 'now') return today;
    try {
      if (str.indexOf('-') > 0) dateAdded = 0 - str.split('-')[1];
      if (str.indexOf('+') > 0) dateAdded = str.split('+')[1] - 0;
      return new Date(today.getFullYear(), today.getMonth(), today.getDate() + dateAdded);
    } catch (e) {
      return null;
    }
  }

  Date.prototype.translate = function (str) {
    return Date.translate(str, this);
  }

  Date.compute = function (sd, ed) {
    var dayTimes = 1000 * 60 * 60 * 24, sdate = new Date(sd), edate = new Date(ed);
    return parseInt((edate.getTime() - sdate.getTime()) / dayTimes);
  }

  Date.prototype.compute = function (ed) {
    return Date.compute(this, ed);
  }
})(window)