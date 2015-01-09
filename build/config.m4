PHP_ARG_ENABLE(smceframework,	
  [ --enable-smceframework   Enable smceframework support])

if test "$PHP_SMCEFRAMEWORK" = "yes"; then
  PHP_REQUIRE_CXX()
  PHP_SUBST(SMCEFRAMEWORK_SHARED_LIBADD)
  PHP_ADD_LIBRARY(stdc++, 1, SMCEFRAMEWORK_SHARED_LIBADD)
  PHP_NEW_EXTENSION(smceframework,smce.cpp,$ext_shared)
fi

