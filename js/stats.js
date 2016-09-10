var stats = {
    type: "GROUP",
name: "Global Information",
path: "",
pathFormatted: "group_missing-name-b06d1",
stats: {
    "name": "Global Information",
    "numberOfRequests": {
        "total": "6000",
        "ok": "1115",
        "ko": "4885"
    },
    "minResponseTime": {
        "total": "10446",
        "ok": "10446",
        "ko": "21000"
    },
    "maxResponseTime": {
        "total": "60031",
        "ok": "59990",
        "ko": "60031"
    },
    "meanResponseTime": {
        "total": "23050",
        "ok": "24990",
        "ko": "22607"
    },
    "standardDeviation": {
        "total": "5032",
        "ok": "7829",
        "ko": "4007"
    },
    "percentiles1": {
        "total": "21943",
        "ok": "24152",
        "ko": "21885"
    },
    "percentiles2": {
        "total": "23134",
        "ok": "28962",
        "ko": "22797"
    },
    "percentiles3": {
        "total": "29345",
        "ok": "38452",
        "ko": "24025"
    },
    "percentiles4": {
        "total": "53955",
        "ok": "54471",
        "ko": "53757"
    },
    "group1": {
        "name": "t < 800 ms",
        "count": 0,
        "percentage": 0
    },
    "group2": {
        "name": "800 ms < t < 1200 ms",
        "count": 0,
        "percentage": 0
    },
    "group3": {
        "name": "t > 1200 ms",
        "count": 1115,
        "percentage": 19
    },
    "group4": {
        "name": "failed",
        "count": 4885,
        "percentage": 81
    },
    "meanNumberOfRequestsPerSecond": {
        "total": "93.75",
        "ok": "17.422",
        "ko": "76.328"
    }
},
contents: {
"req_request-0-684d2": {
        type: "REQUEST",
        name: "request_0",
path: "request_0",
pathFormatted: "req_request-0-684d2",
stats: {
    "name": "request_0",
    "numberOfRequests": {
        "total": "6000",
        "ok": "1115",
        "ko": "4885"
    },
    "minResponseTime": {
        "total": "10446",
        "ok": "10446",
        "ko": "21000"
    },
    "maxResponseTime": {
        "total": "60031",
        "ok": "59990",
        "ko": "60031"
    },
    "meanResponseTime": {
        "total": "23050",
        "ok": "24990",
        "ko": "22607"
    },
    "standardDeviation": {
        "total": "5032",
        "ok": "7829",
        "ko": "4007"
    },
    "percentiles1": {
        "total": "21945",
        "ok": "24152",
        "ko": "21885"
    },
    "percentiles2": {
        "total": "23138",
        "ok": "28962",
        "ko": "22797"
    },
    "percentiles3": {
        "total": "29345",
        "ok": "38452",
        "ko": "24025"
    },
    "percentiles4": {
        "total": "53955",
        "ok": "54471",
        "ko": "53757"
    },
    "group1": {
        "name": "t < 800 ms",
        "count": 0,
        "percentage": 0
    },
    "group2": {
        "name": "800 ms < t < 1200 ms",
        "count": 0,
        "percentage": 0
    },
    "group3": {
        "name": "t > 1200 ms",
        "count": 1115,
        "percentage": 19
    },
    "group4": {
        "name": "failed",
        "count": 4885,
        "percentage": 81
    },
    "meanNumberOfRequestsPerSecond": {
        "total": "93.75",
        "ok": "17.422",
        "ko": "76.328"
    }
}
    }
}

}

function fillStats(stat){
    $("#numberOfRequests").append(stat.numberOfRequests.total);
    $("#numberOfRequestsOK").append(stat.numberOfRequests.ok);
    $("#numberOfRequestsKO").append(stat.numberOfRequests.ko);

    $("#minResponseTime").append(stat.minResponseTime.total);
    $("#minResponseTimeOK").append(stat.minResponseTime.ok);
    $("#minResponseTimeKO").append(stat.minResponseTime.ko);

    $("#maxResponseTime").append(stat.maxResponseTime.total);
    $("#maxResponseTimeOK").append(stat.maxResponseTime.ok);
    $("#maxResponseTimeKO").append(stat.maxResponseTime.ko);

    $("#meanResponseTime").append(stat.meanResponseTime.total);
    $("#meanResponseTimeOK").append(stat.meanResponseTime.ok);
    $("#meanResponseTimeKO").append(stat.meanResponseTime.ko);

    $("#standardDeviation").append(stat.standardDeviation.total);
    $("#standardDeviationOK").append(stat.standardDeviation.ok);
    $("#standardDeviationKO").append(stat.standardDeviation.ko);

    $("#percentiles1").append(stat.percentiles1.total);
    $("#percentiles1OK").append(stat.percentiles1.ok);
    $("#percentiles1KO").append(stat.percentiles1.ko);

    $("#percentiles2").append(stat.percentiles2.total);
    $("#percentiles2OK").append(stat.percentiles2.ok);
    $("#percentiles2KO").append(stat.percentiles2.ko);

    $("#percentiles3").append(stat.percentiles3.total);
    $("#percentiles3OK").append(stat.percentiles3.ok);
    $("#percentiles3KO").append(stat.percentiles3.ko);

    $("#percentiles4").append(stat.percentiles4.total);
    $("#percentiles4OK").append(stat.percentiles4.ok);
    $("#percentiles4KO").append(stat.percentiles4.ko);

    $("#meanNumberOfRequestsPerSecond").append(stat.meanNumberOfRequestsPerSecond.total);
    $("#meanNumberOfRequestsPerSecondOK").append(stat.meanNumberOfRequestsPerSecond.ok);
    $("#meanNumberOfRequestsPerSecondKO").append(stat.meanNumberOfRequestsPerSecond.ko);
}
