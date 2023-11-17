<?php include 'inc_header.php'; ?>
          <main class="p-5 border rounded-5">
            <h1 class="text-center">회원 약관 및 개인정보 취급방침 동의</h1>
            <h4>회원 약관</h4>
            <textarea name="" id="" cols="30" rows="10" class="form-control">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque culpa dignissimos itaque dolor eaque deleniti quo vitae reprehenderit nostrum, nulla eum cum? Eius nostrum facilis sed ut quia numquam mollitia ullam, repellat dolorem iste incidunt inventore consequatur officiis provident, accusantium quasi ab. Ad, explicabo. Iste ab quas, libero excepturi id voluptas eveniet temporibus dolorem minus adipisci nesciunt perferendis voluptatibus facilis odio dignissimos esse. Ut asperiores sapiente, corporis dolore nobis voluptas hic dolores ad similique officiis numquam at, vero modi impedit quas explicabo sit non. Delectus, dignissimos voluptate officiis laudantium exercitationem fugit repellendus, quasi reiciendis qui et voluptatem fugiat tenetur repellat voluptas labore ratione, ad aliquam recusandae. Voluptatem, dolore! Quae quo, est error corporis animi aperiam cum, dolorum laudantium quaerat aliquam explicabo aspernatur reprehenderit ullam! Voluptates voluptatum explicabo culpa, quibusdam totam natus amet quasi, officiis magnam dolores doloribus aperiam tempore eveniet, repellat ex vitae. Incidunt iure expedita aliquam suscipit dignissimos vitae ipsa aut repudiandae tenetur culpa facere quis sit tempore illum alias quos libero assumenda, dolorum nisi quam eum perspiciatis officia. Dolorem, dolor ipsum! Iste corporis ex sunt harum, labore, eligendi quo velit explicabo odio consequatur quasi? Dicta expedita nesciunt ad laborum possimus aliquid unde. Autem pariatur provident odio laboriosam porro.
            </textarea>
            <div class="form-check mt-2">
                <input class="form-check-input" type="checkbox" value="1" id="chk_member1">
                <label class="form-check-label" for="chk_member1">
                  위 약관에 동의하시겠습니까?
                </label>
              </div>
            <h4 class="mt-3">개인정보 취급방침</h4>
            <textarea name="" id="" cols="30" rows="10" class="form-control">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, quae ex? Omnis soluta animi deleniti velit ipsum eos asperiores dolorum a, tempore quidem debitis repellat illo voluptas quod. Magni commodi sed nostrum eum minus omnis corrupti quidem, fugiat magnam? Praesentium at aspernatur ex rerum repudiandae! Incidunt aliquid unde laborum voluptate cupiditate quibusdam suscipit praesentium, alias blanditiis quaerat. Dolores error debitis voluptas iure veniam, exercitationem excepturi molestiae maiores fugiat sit assumenda id. Ea minus veritatis libero alias aspernatur dignissimos facere consectetur voluptate exercitationem! Eveniet, delectus aperiam dolorum iste, similique explicabo obcaecati blanditiis ex, ratione adipisci deserunt mollitia! Magni error deserunt ipsam. Accusantium, dolores quam odio veniam animi deserunt cumque illum ad blanditiis quibusdam fugit qui tenetur aperiam saepe veritatis facere similique perspiciatis officiis voluptatem nihil possimus asperiores sapiente fugiat voluptas. Id velit ex tenetur animi deserunt magnam eligendi sequi necessitatibus quia voluptatem sed cupiditate laboriosam, nulla reprehenderit error rem suscipit impedit aliquam accusamus porro placeat excepturi fuga inventore itaque. Tempore hic sed vel tenetur. Temporibus quo, ea sit culpa optio nam quisquam modi aspernatur consequatur numquam corrupti natus tenetur animi accusamus odit repellat facere repudiandae placeat blanditiis est dolore reiciendis nemo! Ducimus dicta unde quia sapiente commodi, molestiae magnam fugit! Assumenda!
            </textarea>
            <div class="form-check mt-2">
                <input class="form-check-input" type="checkbox" value="1" id="chk_member2">
                <label class="form-check-label" for="chk_member2">
                  위 개인정보 취급방침에 동의하시겠습니까?
                </label>
              </div>

            <div class="mt-4 d-flex justify-content-center gap-3">
                <button class="btn btn-primary w-50" id="btn_member">회원가입</button>
                <button class="btn btn-secondary w-50">가입취소</button>
            </div>

            <form method="post" name="stipluation_form" action="member_input.php" style="display:none;">
              <input type="hidden" name="chk" value="0">
            </form>

            
          </main>
<?php include 'inc_footer.php'; ?>