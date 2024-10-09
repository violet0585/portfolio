module.exports = {
    files: [
      {
        input: "sass/style.scss", // 컴파일할 입력 파일 경로
        output: "sass/style.css", // 컴파일된 CSS 출력 파일 경로
        options: {
          sourcemap: true, // 소스맵 생성 여부
          outputStyle: "compressed" // 출력 스타일 (옵션: 'compressed', 'expanded' 등)
        }
      }
      // 필요한 다른 Sass 파일들을 추가로 정의할 수 있습니다.
    ]
  };
  